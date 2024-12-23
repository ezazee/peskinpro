<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faq;
use App\Models\Settings;
use App\Models\KategoriFaq;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;



class FaqController extends Controller
{
    public function index(Request $request)
    {   
        $user = Auth::user();
        $welcomeMessage = 'FAQ';
        $query = htmlspecialchars($request->input('query'), ENT_QUOTES, 'UTF-8');

        $faqs = Faq::with(['kategori'])
        ->where('title', 'like', '%' . $query . '%')
        ->paginate(10);
        // dd($faqs);
        return view('backend.pages.faq.index',compact('user','faqs','welcomeMessage'));
    }

    public function create()
    {   
        $user = Auth::user();
        $welcomeMessage = 'Create FAQ';
        $categories = KategoriFaq::all();

        return view('backend.pages.faq.create',compact('user','welcomeMessage','categories'));
    }

    public function add(Request $request)
    {
        $categoryId = null;
    
        if ($request->has('new_kategori_faq') && $request->new_kategori_faq != '') {
            $existingCategory = KategoriFaq::where('nama_kategori', $request->new_kategori_faq)->first();
    
            if ($existingCategory) {
                $categoryId = $existingCategory->id;
            } else {
                $category = KategoriFaq::create([
                    'nama_kategori' => $request->new_kategori_faq,
                    'slug' => Str::slug($request->new_kategori_faq),
                ]);
                $categoryId = $category->id;
            }
        }
        elseif ($request->has('kategori_faq') && $request->kategori_faq != '') {
            $categoryId = $request->kategori_faq;
        }
    
        Faq::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'kategori_faq_id' => $categoryId
        ]);
    
        Alert::success('Success', 'FAQ created successfully');
        return redirect()->back()->with('success', 'FAQ created successfully');
    }
    

    public function edit($id){
        $user = Auth::user();
        $categories = KategoriFaq::all();
        $welcomeMessage = 'Edit Faq';
        $faq = Faq::with('kategori')->where('id', $id)->firstOrFail();
        return view('backend.pages.faq.edit',compact('welcomeMessage','user','faq','categories'));
    }


    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);
    
        $categoryId = null;
    
        if ($request->has('new_kategori_faq') && $request->new_kategori_faq != '') {
            $existingCategory = KategoriFaq::where('nama_kategori', $request->new_kategori_faq)->first();
    
            if ($existingCategory) {
                $categoryId = $existingCategory->id;
            } else {
                $category = KategoriFaq::create([
                    'nama_kategori' => $request->new_kategori_faq,
                ]);
                $categoryId = $category->id;
            }
        }
        elseif ($request->has('kategori_faq') && $request->kategori_faq != '') {
            $categoryId = $request->kategori_faq;
        }
    
        $faq->update([
            'title' => $request->title,
            'description' => $request->description,
            'kategori_faq_id' => $categoryId,
        ]);
    
        Alert::success('Success', 'FAQ updated successfully');
        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully');
    }
    


    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        Alert::error('Deleted', 'Faq deleted successfully');
        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully.');
    }

    public function faq(){
        $settings = Settings::all();
        $categories = KategoriFaq::with('faqs')->get();
        return view('frontend.pages.faq', compact('settings','categories'));
    }

    public function faqdetail($slug){
        $settings = Settings::all();
        $categories = KategoriFaq::with('faqs')->get();
        $faq = Faq::where('slug', $slug)->first();
        return view('frontend.pages.faq-detail', compact('settings','categories','faq'));
    }
}
