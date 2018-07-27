<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Comment;


class PageController extends Controller
{
    public function showPage(int $id) 
    {
    	$post = Post::find($id);
    	$comments = Comment::where('id_article', '=', $id)->get(); 
    	if(!$post) {
			return abort(404);
		}

    	return view('Pages/page', ['post' => $post, 'comments' => $comments]);
    }

    public function commentRequest(Request $request, int $id)
    {
    	$comments = new Comment();
    	$objComment = $comments->create([
    		'id_article'   => $id,
    		'author'       => $request->input('author'),
    		'text_comment' => $request->input('comment')
    	]); 
    		return redirect()->route('fullDescription', ['id' =>$id]);
    	}
    
}
