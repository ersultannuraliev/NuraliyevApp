<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function   index(){
        return view ('posts.index');
    }
    public function create(){
        return view( 'posts.create');
    }
    public function store(Request $req){
        //sa;ve a post with title and content
return redirect()->route('posts.index');
    }
    public function show($id){
        return view('posts.show',['postId'  =>$id] );

    }

}
