<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //showing all posts
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //adding create method here to add data into DB 
        Post::create([
            'title' => 'Laravel 20',
            'description' => 'Laravel 21 Content',
            'is_publish' => true,
            'is_active' => true
        ]);
        return 'Post is created Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $post = Post::findOrFail(10);
        $post->update([
            'title'=>'Laravel 2 Updated'
        ]);
        return 'Post Updated Successfully';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $post = Post::findOrFail(9);
        $post->delete();
        return 'Post Deleted Successfully';
    }
}
