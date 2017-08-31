<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postType = '文章總覽';

        $posts = \App\Post::orderBy('created_at', 'desc')
                            ->get();

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }


    public function hot() {
        $postType = '熱門文章';

        $posts = \App\Post::orderBy('page_view', 'desc')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $data = compact('postType', 'posts');

        return view('posts.index', $data);
    }


    public function random() {
        $id = rand(1, 20);

        $post = \App\Post::find($id);

        $data = compact('post');

        return view('posts.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return 'posts.store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Post::find($id);

        $data = compact('post');

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data - compact('id');

        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        return 'posts.update'.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'posts.destory'.$id;
    }

    public function comment($id) {
        return 'posts.comment'.$id;
    }
}
