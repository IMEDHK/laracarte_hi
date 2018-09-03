<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){


    }


    public function store(StoreComment  $request){



    return        Comment::create(['name'=>request('name'),'url'=>'www.google.fr','body'=>request('body')]);




    }
}
