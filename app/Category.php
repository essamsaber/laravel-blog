<?php

namespace App;
use \App\Post;

class Category extends Model
{
	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function postsNo()
	{
		return count($this->posts());
	}
}
