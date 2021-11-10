<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    //index method
    public function index(Posts $posts)
    {
        // return session('message');

        $posts = $posts->all();
        //$posts = Post::all();
        // $posts = Post::latest()
        //     ->filter(request(['month', 'year']))
        //     ->get();

        // $posts = (new \App\Repositories\Posts)->all();

        //$posts = Post::orderBy('created_at', 'desc')->get();
        // $archives = Post::archives();

        return view('posts.index', compact('posts'));
        
    }

     //show method
     public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    //create method
    public function create(){
        return view('posts.create');
    }

    public function store(){

        //create a new post object
        // $post = new Post;

        // //retrieve the values from the request
        // $post->title = request('title');
        // $post->body = request('body');

        // //save it to the database
        // $post->save();

        //VALIDATE
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);

        session()->flash('message', 'Your post has now been published');
        
        return redirect('/');
    }

}
