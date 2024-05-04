<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table ='posts';
    protected $fillable=[
        'title',
        'slug',
        'content',
        'image',
        'created_by',
        'status',
        'trending',
        // 'tags',
    ];
    public function User(){
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function Comments(){
      return $this->hasMany(Comment::class,'post_id','id');
    }
    public function Post_tag()
    {
        return $this->belongsToMany(Tag::class,'Post_tags');
    }
}
