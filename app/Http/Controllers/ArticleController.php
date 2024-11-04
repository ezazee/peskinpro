<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Tag;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function create(){
        $user = Auth::user();
        $welcomeMessage = 'Add Article';
        return view('backend.pages.article.create',compact('welcomeMessage','user'));
    }

    public function list(){
        $user = Auth::user();
        $welcomeMessage = 'List Article';
        $articles = Article::with(['tag'])->paginate(10);

        // dd($articles);
        return view('backend.pages.article.list',compact('welcomeMessage','user','articles'));
    }

    public function add(Request $request){
        $images = $request->file('images')->store('article_images', 'public');
        $user_id = Auth::id();

        $article = Article::create([
            'images' => $images,
            'tittle' => $request->tittle,
            'slug' => Str::slug($request->tittle),
            'content' => $request->content,
            'status' => $request->status,
            'start_date' => Carbon::parse($request->start_date)->format('Y-m-d'),
            'start_time' => Carbon::parse($request->start_time)->format('H:i'),
            'keyword' => $request->keyword,
            'description' => $request->description,
            'user_id' => $user_id
        ]);

        $tags = $request->input('tags');
        $tagIds = [];
        if ($tags) {
            $tagNames = explode(',', $tags);
            foreach ($tagNames as $tagName) {
                $tagName = trim($tagName);
                $tagSlug = Str::slug($tagName, '-');
                $tag = Tag::firstOrCreate(['slug' => $tagSlug], ['nama_tags' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $article->tag()->attach($tagIds);
        }

        Alert::success('Success', 'Add Post Success');
        return redirect()->back()->with('success', 'Content created successfully.');
    }

    public function edit($slug){
        $user = Auth::user();
        $welcomeMessage = 'Edit Article';
        $articles = Article::where('slug', $slug)->firstOrFail();
        return view('backend.pages.article.edit',compact('welcomeMessage','user','articles'));
    }

    public function update(Request $request, $id){

        $articles = Article::findOrFail($id);

        if ($request->hasFile('images')) {
            if ($articles->images) {
                Storage::disk('public')->delete($articles->images);
            }
            $images = $request->file('images')->store('article_images', 'public');
            $articles->images = $images;
        }

        $articles->update([
            'tittle' => $request->tittle,
            'content' => $request->content,
            'status' => $request->status,
            'start_date' => Carbon::parse($request->start_date)->format('Y-m-d'),
            'start_time' => Carbon::parse($request->start_time)->format('H:i'),
            'keyword' => $request->keyword,
            'description' => $request->description
        ]);

        $tags = $request->input('tags');
        $tagIds = [];
        if ($tags) {
            $tagNames = explode(',', $tags);
            foreach ($tagNames as $tagName) {
                $tagName = trim($tagName);
                $tagSlug = Str::slug($tagName, '-');
                $tag = Tag::firstOrCreate(['slug' => $tagSlug], ['nama_tags' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $articles->tag()->sync($tagIds); 
        } else {
            $articles->tag()->detach();
        }

        Alert::success('Success', 'Aticle updated successfully.');
        return redirect()->back()->with('success', 'Aticle Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id); 
        $article->delete();
        Alert::error('Deleted', 'Article deleted successfully');
        return redirect()->route('article.list')->with('success', 'Article deleted successfully.');
    }
}
