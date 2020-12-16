<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable=[
    'name',
    'des',
    'meta_des',
    'meta_keyword',
    'youtube',
    'user_id',
    'cat_id',
    'published',
    'image'
    ];
     public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
    public function cat()
    {
        return $this->belongsTo(Category::class ,'cat_id');
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class ,'skills_videos');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class ,'tags_videos');
    }

}
