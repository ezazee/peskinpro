<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create(){
        $user = Auth::user();
        $welcomeMessage = 'Add Article';
        return view('backend.pages.article.create',compact('welcomeMessage','user'));
    }
}
