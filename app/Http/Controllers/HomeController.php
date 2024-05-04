<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */


  public function home()
  {

    $role =  auth()->user()->roles->pluck("name")->first();
    switch ($role) {
      case 'writer':
         return redirect()->route('admin.index');
        break;

      case 'admin':
        return redirect()->route('admin.index');
        break;

      default:
      return redirect()->route('frontpage.index');
        break;
    }
  }
  public function contactUs()
  {
    return view('contactUs');
  }


  public function logout()
  {
    Auth::logout();
    return redirect()->to('/');
  }
}
