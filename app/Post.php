<?php

namespace App;
use \App\Category;
use \App\User;
use Cviebrock\EloquentSluggable\Sluggable;



class Post extends Model
{
    use Sluggable;

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
