<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "Comments";
    protected $primarykey = "id";

    protected $fillable = [
    	'id_article',
    	'author', 
    	'text_comment',
    ];

    protected $dates =[ 
    	'created_at', 
        'updated_at'
    ];}
