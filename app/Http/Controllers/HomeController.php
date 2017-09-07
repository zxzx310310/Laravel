<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index() {
    	$postType = '精選文章';

    	$posts = \App\Post::where('is_feature', 1) 
    						->orderBy('created_at', 'desc')
    						->paginate(5);

    	$user = Auth::user();

    	$data = compact('postType', 'posts', 'user');



    	return view('posts.index', $data);
    }
}
