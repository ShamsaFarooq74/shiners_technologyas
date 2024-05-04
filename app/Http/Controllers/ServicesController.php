<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $services = Service::all();
    $services_count = Service::count();
    return view('services.index', compact('services', 'services_count'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $tags = Tag::all();
    return view('services.create', compact('tags'));
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
      'title' => ['required'],
      'description' => ['required'],
      'image' => ['required'],
      'tags' => ['required'],
      'long_description' => ['required'],

    ]);
    if ($request->file('image')) {
      $file = $request->file('image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/services', $filename);
      $data['image'] = $filename;
    }
    $data['tags'] = json_encode($request->tags);

    $category = new Service();
    $category->create($data);
    return redirect()->route('service.index')->with('success', 'Service Added Successfully');
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
  public function edit(Service $service)
  {
    $tags = Tag::all();
    return view('services.edit', compact('service', 'tags'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Service $service)
  {
    $data = $request->validate([
      'title' => ['required'],
      'description' => ['required'],
      'tags' => ['required'],
      'long_description' => ['required'],
    ]);
    if ($request->file('image')) {
      $path = ('assets/uploads/services/' . $service->image);
      if (File::exists($path)) {
        File::delete($path);
      }
      $file = $request->file('image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/services', $filename);
      $data['image'] = $filename;
    }
    $data['tags'] = json_encode($request->tags);
    $service->update($data);

    return redirect()->route('service.index')->with('success', 'service Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Service $service)
  {
    if ($service->image) {
      $path = ('assets/uploads/services/' . $service->image);
      if (File::exists($path)) {
        File::delete($path);
      }
    }
    $service->delete();
    return redirect()->route('service.index')->with('danger', 'service Deleted Successfully');
  }
}
