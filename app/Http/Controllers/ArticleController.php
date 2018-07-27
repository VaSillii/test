<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class ArticleController extends Controller
{
	//Добавление записей
	public function addArticle() 
    {
    	return view('Pages.add');
    }

    public function addRequestArticle(Request $request) 
    {
    	$this->validate($request, [
    		'title'				=>	'required|string|min: 1| max: 128',
    		'short_description'	=>	'required|string|min: 1',
    	]);

    	$objPost = new Post();
    	$objPost = $objPost->create([
    		'title' => $request->input('title'),
    		'short_description' => $request->input('short_description'),
    		'full_description'  => $request->input('full_description')
    	]);

    	if ($objPost) {
    		return redirect()->route('/')->with('success', 'Статья добавлена');
    	} else {
    		return redirect()->route('addArticle')->with('error', 'Статья не добавлена');
    	}
    }

    //Редактирование записей 
    public function editArticle() 
    {
    	return view('Pages.edit');
    }

    public function editRequestArticle()
    {

    }
}
