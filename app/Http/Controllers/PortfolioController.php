<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ProjectPost;
use App\Models\ProjectTeam;
use Illuminate\Http\Request;
use App\Models\ProjectService;


class PortfolioController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function portfolio(Request $request)
  {
    $services_list = Service::all();
    $posts = ProjectPost::paginate(3);

    if ($request->ajax()) {
      return view('portfolio.partial_project_post', compact('posts'));
    }
    return view('portfolio.index', compact('posts', 'services_list'));
  }

  public function search(Service $service)
  {
    $services_list = Service::all();
    $projectServices = ProjectService::where('service_id', $service->id)->get();
    foreach ($projectServices as $key => $projectService) {
      $project_id[$key] = $projectService->project_id;
    }
    if (!empty($project_id)) {
      foreach ($project_id as $key => $id) {
        $posts[$key] = ProjectPost::where('id', $id)->first();
      }
      return view('portfolio.index', compact('posts', 'services_list'));
    } else {
      return redirect()->route('portfolio.portfolio')->with('danger', 'No Project Found!');
    }
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
    $teamMembers = ProjectTeam::all();
    $projectServices = ProjectService::all();
    $post = ProjectPost::where('id', $id)->first();

    return view('portfolio.project_details', compact('post', 'projectServices', 'teamMembers'));
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

  public function projectDetails()
  {
    return view('portfolio.project_details');
  }
}
