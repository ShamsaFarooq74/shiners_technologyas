<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectComponent extends Model
{
    use HasFactory;
    protected $table='project_components';
    protected $fillable=[
      'project_id',
      'component_id'
    ];

    public function projectComponentName(){
      return $this->belongsTo(Component::class,'component_id','id');
    }
}
