<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPost extends Model
{
  use HasFactory;
  protected $table = 'project_posts';
  protected $fillable = [
    'project_title',
    'client_company_name',
    'client_name',
    'client_role',
    'project_image',
    'our_challenge_images',
    'description',
    'reference_link',
    'our_challenge',
    'our_solution',
    'review',
    'next_project',
  ];

  //using in projectpost edit start
  public function projectComponents()
  {
    return $this->hasMany(ProjectComponent::class, 'project_id', 'id');
  }

  public function projectService()
  {
    return $this->hasMany(ProjectService::class, 'project_id', 'id');
  }

  public function projectTeam()
  {
    return $this->hasMany(projectTeam::class, 'project_id', 'id');
  }
  //using in projectpost edit end


}
