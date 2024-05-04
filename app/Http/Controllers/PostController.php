<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\PostTags;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::join('posts', 'users.id', '=', 'posts.created_by')
      ->select('users.*', 'posts.*')
      ->get();
    $posts = Post::all();
    $post_count = Post::count();
    return view('admin.posts.index', compact('posts', 'post_count'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $tags = Tag::all();
    return view('admin.posts.create', compact('tags'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->validate([
      'title' => ['required', 'string', 'min:2', 'max:255'],
      'slug' => ['required', 'string', 'min:2', 'max:255'],
      'content' => ['required', 'string', 'min:2'],
      'status' => ['nullable'],
      'trending' => ['nullable'],
      'image' => ['required', 'max:2000'],
    ]);
    $post = new Post;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/posts', $filename);
      $data['image'] = $filename;
    }
    $data['created_by'] = Auth::user()->id;
    $data['status'] = $request->status == TRUE ? '1' : '0';
    $data['trending'] = $request->trending == TRUE ? '1' : '0';
    $post = $post->create($data);

    foreach ($request->tags as $tag) {
      PostTags::create(['tag_id' => $tag, 'post_id' => $post->id]);
    }
    return redirect()->route('posts.index')->with('success', 'Post Created Successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)

  {
    $tags = Tag::all();
    return view('admin.posts.edit', compact('post', 'tags'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Post $post)
  {
    $data = $request->validate([
      'title' => ['required', 'string', 'min:2', 'max:255'],
      'slug' => ['required', 'string', 'min:2', 'max:255'],
      'content' => ['required', 'string', 'min:2'],
      'status' => ['nullable'],
      'trending' => ['nullable'],
    ]);

    if ($request->hasFile('image')) {
      $path = ('assets/uploads/posts/' . $post->image);
      if (File::exists($path)) {
        File::delete($path);
      }
      $file = $request->file('image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/posts', $filename);
      $data['image'] = $filename;
    }
    $data['created_by'] = Auth::user()->id;
    $data['status'] = $request->status == TRUE ? '1' : '0';
    $data['trending'] = $request->trending == TRUE ? '1' : '0';
    $post->update($data);

    PostTags::where('post_id', $post->id)->delete();
    foreach ($request->tags as $tag) {
      PostTags::create(['tag_id' => $tag, 'post_id' => $post->id]);
    }
    return redirect()->route('posts.index')->with('success', 'Post Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    if ($post->image) {
      $path = ('assets/uploads/posts/' . $post->image);
      if (File::exists($path)) {
        File::delete($path);
      }
    }
    $post->delete();
    return redirect()->route('posts.index')->with('danger', 'Post Deleted Successfully');
  }
}
