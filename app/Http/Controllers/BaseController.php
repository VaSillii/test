<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class BaseController extends Controller
{
    public function showPage() {
    	$objaArticle = new Post();
    	$posts = $objaArticle->get();
    	return view('index', ['posts' => $posts]);
	}
}
