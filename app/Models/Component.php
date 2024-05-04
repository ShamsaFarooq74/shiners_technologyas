<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $table='components';
    protected $fillable=[
      'title',
    ];


    // public function projectComponents(){
    //   return $this->belongsTo(ProjectComponent::class,'component_id','id');
    // }
}
