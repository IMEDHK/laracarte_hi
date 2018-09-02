<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $comments=Comment::all();
        return view('pages.home',compact('comments'));

    }


    public function about(){

        return view('pages.about');

    }

}
