<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $primarykey = "id";

    protected $fillable = [
    	'title', 
    	'short_description',
    	'full_description',
    ];

    protected $dates =[ 
    	'created_at', 
        'updated_at'
    ];
}
