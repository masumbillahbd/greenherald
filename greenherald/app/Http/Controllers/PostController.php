<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Auth;



class PostController extends Controller
{
    //  public function __construct() {
    //     $this->middleware('auth');
    // }

    // public function __construct(Auth $auth)
    // {
    //     $this->auth = $auth;
    // }

    public function createPost(){
    	$categories = Category::all();
    	return view('admin.post.createPost',['categories' => $categories]);
    }

    public function storePost(Request $request){

    	$this->validate($request, [
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$post = new Post;

    	$post->title = $request->title;
    	$post->user_id = Auth::id();
    	$post->description = $request->description;
    
    	$post->status = $request->status;
    	$post->save();

    	$post->category_id()->sync($request->category_id, false);
    	return redirect()->back()->with('message', 'Post save successfully');

    }


    public function managePost(){
    	$posts= Post::all();

    	return view('admin.post.managePost',['posts'=> $posts]);
    }



    
}
