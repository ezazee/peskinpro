<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        $articles = Article::with('tag')
            ->where('status', 'public')
            ->orderby('id', 'desc')
            ->take(6)
            ->get();
        // dd($articles);
        return view('about.index', compact('articles'));
    }
    public function ListProducts()
    {
        return view('about.pages.product.index');
    }

    public function TonerProducts()
    {
        return view('about.pages.product.detail.toner');
    }

    public function CleansingProducts()
    {
        return view('about.pages.product.detail.cleansing');
    }

    public function HydroProducts()
    {
        return view('about.pages.product.detail.hydro');
    }

    public function FeminimeProducts()
    {
        return view('about.pages.product.detail.feminime');
    }

    public function PoreExProducts()
    {
        return view('about.pages.product.detail.pore');
    }

    public function SerumProducts()
    {
        return view('about.pages.product.detail.serum');
    }

    public function ToneProducts()
    {
        return view('about.pages.product.detail.tone');
    }

    public function AboutContact()
    {
        return view('about.pages.contact.index');
    }

    public function AboutNews()
    {
        $articles = Article::with('tag')
            ->where('status', 'public')
            ->orderby('id', 'desc')
            ->paginate(15);

        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $popularArticles = Article::where('status', 'public')
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->orderBy('view', 'desc')
            ->take(4)
            ->get();

        if ($popularArticles->isEmpty()) {
            $startOfLastWeek = Carbon::now()->subWeek()->startOfWeek();
            $endOfLastWeek = Carbon::now()->subWeek()->endOfWeek();

            $popularArticles = Article::where('status', 'public')
                ->whereBetween('created_at', [$startOfLastWeek, $endOfLastWeek])
                ->orderBy('view', 'desc')
                ->take(4)
                ->get();
        }

        $tags = Tag::take(10)->get();

        return view('about.pages.news.index', compact('articles', 'popularArticles', 'tags'));
    }

    public function AboutNewsDetail($slug)
    {
        $articles = Article::where('slug', $slug)->where('status', 'public')->first();

        if (!$articles) {
            return redirect()->back()->with('error', 'This article is not available or not publicly accessible.');
        }
        $articles->increment('view');

        $relatedArticles = Article::where('status', 'public')
            ->whereHas('tag', function ($query) use ($articles) {
                $query->whereIn('tags.id', $articles->tag->pluck('id'));
            })
            ->where('id', '!=', $articles->id)
            ->orderBy('view', 'desc')
            ->take(3)
            ->get();

        return view('about.pages.news.detail', compact('articles', 'relatedArticles'));
    }

    public function newsTag()
    {
        return view('about.pages.news.tag');
    }
}
