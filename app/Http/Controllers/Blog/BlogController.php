<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProjectPost;
use App\Models\ProjectService;
use App\Models\Service;
use Laravel\Ui\Presets\React;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = Post::paginate(2);
    $recent_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    $trending_posts = Post::where('trending', '1')->get();
    $projectPosts = ProjectPost::all();
    return view('blog.index', compact('posts', 'trending_posts', 'recent_posts', 'projectPosts'));
  }

  public function contactUs()
  {
    return view('blog.contactUs');
  }

  public function services()
  {
    $services = Service::all();
    return view('blog.services', compact('services'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
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
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
  public function postDetails(Post $post)
  {

    $comments = Comment::where('post_id', $post->id)->get();
    $count = Comment::where('post_id', $post->id)->count();
    $recent_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    return view('blog.post_details', compact('post', 'comments', 'count', 'recent_posts'));
  }
  public function search(Request $request)
  {

    $posts = Post::where('slug', 'LIKE', '%' . $request->search . '%')->paginate(2);

    if (count($posts) > 0) {

      $trending_posts = Post::where('trending', '1')->get();
      $recent_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
      return view('blog.index', compact('posts', 'trending_posts', 'recent_posts'));
    } else {
      return redirect()->route('blog.index')->with('danger', "Sorry no Search Results Found!");
    }
  }


  public function serviceDetails(Service $service)
  {
    $project_ids= ProjectService::where('service_id',$service->id)->get();
    foreach($project_ids as $key=> $id){
      $posts[$key]=ProjectPost::where('id',$id->project_id)->first();
    }
    return view('blog.service_details', compact('service','posts'));
  }

public function about(){
  return view('blog.about_us');
}
}
