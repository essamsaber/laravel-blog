<?php

namespace App;


class Uinfo extends Model
{
    public function user()
    {
    	return $this->belongsToOne(User::class);
    }
}
