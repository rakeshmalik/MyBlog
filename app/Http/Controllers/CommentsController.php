<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentsController extends Controller

{
   public function store(post $post)
   {
   		$this->validate(Request(), [ 'comment' => 'required|min:2' ]);

   		Comment::create([
   			'comment'=> Request('comment'),
   			'post_id'=> $post->id
   		]);

//helper funtion use to stay back 
   		return back();
   }
}
