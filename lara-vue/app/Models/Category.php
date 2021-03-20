<?php

namespace App\Models;

use App\Models\Post;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasSlug;
    protected $fillable = ['name','slug'];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
