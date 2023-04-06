<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $slug = Str::slug($data['title']);
        $data['slug'] = $slug;
        if($request->has('featured')) $data['featured'] = true;

        $name = "$slug.jpg";
        $path = $request->file('banner')->storeAs('post_banner', $name, 'public');
        $image = Image::make(public_path("storage/{$path}"))->fit(720, 420);
        $image->save();

        $data['image_url'] = Storage::url($path);
        Post::query()->create($data);
        return redirect()->route('admin.posts.index')
            ->with('status', 'success')->with('message', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = Post::with('comments')->where('slug', $post)->first();
        $recent_posts = Post::latest()->limit(5)->get();
        return view('single-post', compact('post', 'recent_posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->validated();
        $slug = Str::slug($data['title']);
        $data['slug'] = $slug;
        if($request->has('featured')) $data['featured'] = true;
        else $data['featured'] = false;

        if ($request->hasFile('banner')) {
            File::delete(public_path($post->image_url));
            $name = "$slug.jpg";
            $path = $request->file('banner')->storeAs('post_banner', $name, 'public');
            $image = Image::make(public_path("storage/{$path}"))->fit(720, 420);
            $image->save();

            $data['image_url'] = Storage::url($path);
        }

        $post->update($data);
        return redirect()->route('admin.posts.index')
            ->with('status', 'success')->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Session::flash('status', 'success');
        Session::flash('message', 'Post Deleted Successfully');
    }
}
