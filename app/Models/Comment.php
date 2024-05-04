<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='Comments';
    protected $fillable=[
      'post_id',
      'name',
      'email',
      'comment',
    ];

    public function Comments(){
      return $this->belongsTo(Post::class,'post_id','id');
    }//check where are you using it Comments function
    public function Post(){
      return $this->belongsTo(Post::class,'post_id','id');
  }
}
