<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'email', 'comment'];

    public static $rules = [
    	'name'	=> 'required',
    	'email'	=> 'required|email',
    	'comment' => 'required'
    ];
}
