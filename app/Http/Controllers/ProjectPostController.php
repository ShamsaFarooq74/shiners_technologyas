<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Component;
use App\Models\ProjectPost;
use App\Models\ProjectTeam;
use Illuminate\Http\Request;
use App\Models\ProjectComponent;
use App\Models\ProjectService;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\File;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectPostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = ProjectPost::all();
    $post_count = ProjectPost::count();
    $projectServices =ProjectService::all();
    $teamMembers = ProjectTeam::all();
    $projectComponents = ProjectComponent::all();
    return view('admin.projectposts.index', compact('posts', 'post_count', 'projectServices', 'teamMembers', 'projectComponents'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $services =Service::all();
    $teamMembers = Team::all();
    $components = Component::all();
    return view('admin.projectposts.create', compact('services', 'teamMembers', 'components'));
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
      'project_title' => ['required'],
      'client_company_name' => ['required'],
      'client_name' => ['required'],
      'client_role' => ['required'],
      'project_image' => ['required'],
      'our_challenge_images' => ['required'],
      'reference_link' => ['required'],
      'description' => ['required'],
      'our_challenge' => ['required'],
      'our_solution' => ['required'],
      'review' => ['required'],
      'next_project' => ['nullable'],
    ]);

    $data2 = $request->validate([
      'teamMembers' => ['required'],
      'components' => ['required'],
      'services' => ['required'],
    ]);

    if ($request->file('project_image')) {
      $file = $request->file('project_image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/posts', $filename);
      $data['project_image'] = $filename;
    }
    //json files handing start
    $files = request()->file('our_challenge_images');
    foreach ($files as $key => $file) {
      $ext = $file->getClientOriginalExtension();
      $filename = random_int(0, 9999) . time() . '.' . $ext;
      $file->move('assets/uploads/posts', $filename);
      $data['our_challenge_images'][$key] = $filename;
    }
    $data['our_challenge_images'] = json_encode($data['our_challenge_images']);
    $data['service_categories'] = json_encode($request->service_categories);
    //json files handing end
    $post = ProjectPost::create($data);

    foreach ($data2['teamMembers'] as $key => $member_id) {
      $teamMember = new ProjectTeam();
      $teamMember->project_id = $post->id;
      $teamMember->user_id = $member_id;
      $teamMember->save();
    }
    foreach ($data2['services'] as $key => $service_id) {
      $Services = new ProjectService();
      $Services->project_id = $post->id;
      $Services->service_id = $service_id;
      $Services->save();
    }

    foreach ($data2['components'] as $key => $component_id) {
      $projectComponent = new ProjectComponent();
      $projectComponent->project_id = $post->id;
      $projectComponent->component_id = $component_id;
      $projectComponent->save();
    }


    return redirect()->route('projectPost.index')->with('success', 'Post created successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $post = ProjectPost::where('id', $id)->first();
    $services =Service::all();
    $users = User::all();
    $components = Component::all();
    // $projectComponents=ProjectComponent::all();

    return view('admin.projectposts.edit', compact('post', 'services', 'users', 'components',));
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
    $post = ProjectPost::where('id', $id)->first();
    $data = $request->validate([
      'project_title' => ['required'],
      'client_company_name' => ['required'],
      'client_name' => ['required'],
      'client_role' => ['required'],
      'reference_link' => ['required'],
      'description' => ['required'],
      'our_challenge' => ['required'],
      'our_solution' => ['required'],
      'review' => ['required'],
      'next_project' => ['nullable'],
    ]);
    $data2 = $request->validate([
      'teamMembers' => ['required'],
      'components' => ['required'],
      'services' => ['required'],
    ]);


    if ($request->file('project_image')) {
      $file = $request->file('project_image');
      $ext = $file->getClientOriginalExtension();
      $filename = time() . '.' . $ext;
      $file->move('assets/uploads/posts', $filename);
      $data['project_image'] = $filename;
      $path = ('assets/uploads/posts' . $post->project_image);
      if (File::exists($path)) {
        File::delete($path);
      }
    }

    if ($request->file('our_challenge_images')) {

      if ($post->our_challenge_images) {
        foreach (json_decode($post->our_challenge_images) as $key => $image) {
          $path = ('assets/uploads/posts/' . $image);
          if (File::exists($path)) {
            File::delete($path);
          }
        }
      }
      $files = request()->file('our_challenge_images');
      foreach ($files as $key => $file) {
        $ext = $file->getClientOriginalExtension();
        $filename = random_int(0, 9999) . time() . '.' . $ext;
        $file->move('assets/uploads/posts', $filename);
        $data['our_challenge_images'][$key] = $filename;
      }
      $data['our_challenge_images'] = json_encode($data['our_challenge_images']);


    }
    $post->update($data);


    $teamMembers = ProjectTeam::where('project_id', $id)->get();
    foreach($teamMembers as $member){
      $member->delete();
    }


    foreach ($data2['teamMembers'] as $key => $member_id) {
      $teamMember = new ProjectTeam();
      $teamMember->project_id = $post->id;
      $teamMember->user_id = $member_id;
      $teamMember->save();
    }


    $projectServices = ProjectService::where('project_id', $id)->get();
    foreach($projectServices as $service){
      $service->delete();
    }
    foreach ($data2['services'] as $key => $service_id) {
      $Services = new ProjectService();
      $Services->project_id = $post->id;
      $Services->service_id = $service_id;
      $Services->save();
    }



    $projectComponents = ProjectComponent::where('project_id', $id)->get();
    foreach($projectComponents as $component){
      $component->delete();
    }

    foreach ($data2['components'] as $key => $component_id) {
      $projectComponent = new ProjectComponent();
      $projectComponent->project_id = $post->id;
      $projectComponent->component_id = $component_id;
      $projectComponent->save();
    }


    return redirect()->route('projectPost.index')->with('success', 'Post Updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {

    $post = ProjectPost::where('id', $id)->first();
    if ($post->our_challenge_images) {
      foreach (json_decode($post->our_challenge_images) as $key => $image) {
        $path = ('assets/uploads/posts/' . $image);
        if (File::exists($path)) {
          File::delete($path);
        }
      }
    }


    $post->delete();
    return redirect()->route('projectPost.index')->with('success', 'Post Deleted successfully');
  }
}
