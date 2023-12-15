<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::all();

        return view('dashboard.index')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);

        $post = new Posts();
        $post->user_id = $request->user_id;
        $post->subject = $request->subject;
        $post->content = $request->content;
        $post->save();

        $posts = Posts::all();
        return view('pages.home')->with('posts', $posts);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Posts::findOrFail($id);

        return view('pages/edit')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Posts::findOrFail($id);

        return view('pages.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'subject' => 'required',
            'content' => 'required'
        ]);

        $post = Posts::findOrFail($id);
        $post->user_id = $request->user_id;
        $post->subject = $request->subject;
        $post->content = $request->content;

        $post->save();
        
        $posts = Posts::all();
        return view('pages.home')->with('posts', $posts);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Posts::destroy($id);
        return redirect()->route('home');
    }
}
