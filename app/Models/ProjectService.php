<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectService extends Model
{
  use HasFactory;
  protected $table = 'project_services';
  protected $fillable = [
    'project_id',
    'service_id'
  ];
   //used in projectpost index and portfolio index
   public function serviceName(){
    return $this->belongsTo(Service::class,'service_id','id');
  }

}
