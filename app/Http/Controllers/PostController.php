<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{

    public function home(){
        return view('welcome');
    }

    // public function posts(){
    //     $data = Post::all();
    //     return view('site.posts',compact('data'));
    // }

    // public function postDetails($slug){
    //     $post = Post::where('slug',$slug)->first();
    //     return view('site.single',compact('post'));
    // }

}