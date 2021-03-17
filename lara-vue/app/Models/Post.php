<?php

namespace App\Models;

use App\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','category_id','name','slug','content','status'];

    public function category()
    {
    	return $this->belongsTo(Category::class)->select('id','name','slug');
    }

    public function user()
    {
    	return $this->belongsTo(User::class)->select('id','name');
    }
}
