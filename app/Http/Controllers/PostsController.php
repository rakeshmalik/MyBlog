<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
    	//fetch all post from database
        // return
    	$posts=Post::latest()->get();
    	return view('posts.index',compact('posts'));
    }
    public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {
    	//dd(request()->all());
		
		//$posts=new post;
		//$posts->title = request('title');
		//$posts->body = request('body');
	    //$posts->save();

	    //error validation
	    $this->validate(request(),[
	    	'title' => 'required',
	    	'body' => 'required'
	    ]);

	   Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id() 
        ]);

	    return redirect('/');
    }
    public function show(Post $post)
    {
    	// return $post->comments;
    	return view('Posts.showPost',compact('Post'));
    }
    
}
