<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    	$postType = '精選文章';

    	$posts = \App\Post::where('is_feature', 1) 
    						->orderBy('created_at', 'desc')
    						->get();

    	$data = compact('postType', 'posts');

    	return view('posts.index', $data);
    }
}
