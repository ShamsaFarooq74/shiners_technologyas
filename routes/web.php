<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\ProjectPostController;
use App\Http\Controllers\NotificationSendController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//front page routes
Route::get('/',[Controller::class,('frontPage')])->name('frontpage.index');

//writer routes
Route::middleware(['auth', 'role:admin|writer'])->group(function () {
  Route::get('admin', [AdminController::class, ('index')])->name('admin.index');
  Route::get('view-comments',[AdminController::class,('viewComments')])->name('view.comments');
  //post routes
  Route::resource('/posts', PostController::class);
  //services controller
  Route::resource('/service',ServicesController::class);
  //project post controller
  Route::resource('/projectPost',ProjectPostController::class);

});

//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
  //permissions
  Route::get('permissions', [PermissionsController::class, ('index')]);
  Route::get('permissions.create', [PermissionsController::class, ('create')]);
  Route::post('permissions.store', [PermissionsController::class, ('store')]);
  Route::get('permissions.edit/{permission}', [PermissionsController::class, ('edit')]);
  Route::post('permissions.update/{permission}', [PermissionsController::class, ('update')]);
  Route::get('permissions.destroy/{permission}', [PermissionsController::class, ('destroy')]);
  Route::post('permissions.roles/{permission}', [PermissionsController::class, ('assignRole')]);
  Route::delete('/permissions/{permission}/roles/{role}', [PermissionsController::class, 'removeRole'])->name('permissions.roles.remove');

  //roles
  Route::get('roles', [RolesController::class, ('index')]);
  Route::get('roles.create', [RolesController::class, ('create')]);
  Route::post('roles.store', [RolesController::class, ('store')]);
  Route::get('roles.edit/{role}', [RolesController::class, ('edit')]);
  Route::post('roles.update/{role}', [RolesController::class, ('update')]);
  Route::get('roles.destroy/{role}', [RolesController::class, ('destroy')]);
  Route::post('roles.permissions/{role}', [RolesController::class, ('givePermission')]);
  Route::delete('/roles/{role}/permissions/{permission}', [RolesController::class, ('revokePermission')])->name('roles.permissions.revoke');
  //users
  Route::get('users', [UserController::class, 'index'])->name('users.index');
  Route::get('user.create',[UserController::class,'create'])->name('user.create');
  Route::post('user.store',[UserController::class,'store'])->name('user.store');
  Route::get('user.destroy/{user}', [UserController::class, 'destroy'])->name('users.destroy');
  Route::get('user.edit/{user}', [UserController::class, ('edit')]);
  Route::post('user.update/{user}', [UserController::class, ('update')]);
  Route::get('/users.roles/{user}', [UserController::class, ('assignRolePage')]);
  Route::post('user.role.assign/{user}', [UserController::class, ('assignUserRole')]);
  Route::delete('user.remove.role/{user}/{role}', [UserController::class, ('removeUserRole')]);
  Route::post('user.permission.assign/{user}', [UserController::class, ('assignUserPermission')]);
  Route::delete('/user.remove.permission/{user}/{permission}', [UserController::class, ('removeUserPermission')]);
});
//blog
Route::get('/blog',[BlogController::class,('index')])->name('blog.index');
Route::get('contact_us',[BlogController::class,('contactUs')])->name('blog.contactUs');
Route::get('post_details/{post}',[BlogController::class,('postDetails')])->name('blog.postDetails');
Route::get('services',[BlogController::class,('services')])->name('blog.services');
Route::get('service-details/{service}',[BlogController::class,('serviceDetails')])->name('blog.service-details');
Route::post('search',[BlogController::class,('search')])->name('blog.search');
Route::get('about-us',[BlogController::class,('about')])->name('blog.about');
//portfolio
Route::resource('/portfolio', PortfolioController::class);
Route::get('/portfolio-view',[PortfolioController::class,('portfolio')])->name('portfolio.portfolio');
Route::post('search-project/{service}',[PortfolioController::class,('search')])->name('project.search');
//comment routes
Route::resource('/comments', CommentController::class);
Route::get('view-comments',[CommentController::class,('viewComments')])->name('view.comments');
Route::post('/comment.store/{post}',[CommentController::class,('store')])->name('comment.store');
//contact us
Route::post('/send-email',[ContactController::class,('sendEmail')])->name('send.email');
Route::post('contactInfo',[ContactController::class,('store')])->name('contactInfo');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/logout',[HomeController::class,('logout')])->name('logout');
Auth::routes();
