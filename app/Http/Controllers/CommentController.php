<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $comments=Comment::all();
      $count=Comment::count();
      return view('comments.view-comments',compact('comments','count'));
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
    public function store(Request $request,Post $post)
    {
      $data= $request->validate([
        'name'=>['required'],
        'email'=>['required'],
        'comment'=>['required',],

      ]);
      $data['post_id']=$post->id;
      $comment= new Comment();
      $comment->create($data);
      $comments=Comment::where('post_id',$post->id)->get();
      $count=Comment::count();
      return redirect()->back()->with(compact('post','comments','count'))->with('success','Your Comment Posted successfully');

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
    public function edit(Comment $comment)
    {

      return view('comments.edit-comment',compact('comment'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comment $comment)
    {

        $data=$request->validate([
          'comment'=>['required'],
        ]);
        $comment->update($data);
        $comments=Comment::all();
        $count=Comment::count();
        return redirect()->route('comments.index')->with(compact('comments','count'))->with('success', 'Comment Updated Successfully');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        $comments=Comment::all();
        $count=Comment::count();
        return redirect()->route('comments.index')->with(compact('comments','count'))->with('danger', 'Comment Deleted Successfully');
    }
}
