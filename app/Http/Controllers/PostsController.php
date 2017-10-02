<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
            /**
            *THIS WHOLE THING WILL DO THE BLOCK ACCESS TO POSTS
            * Create a new controller instance.
            *
            * @return void
            */
            public function __construct()
            {
                $this->middleware('auth', ['except' => ['index', 'show']]);
            }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Post::all(); //this one just returns the array
        //now let's do the right way
             //$posts = Post::all();  //MAIN STARTING
        //$posts = Post::orderBy('title', 'asc')->get();  // for sorting filtering commands 
        //$posts = Post::orderBy('title', 'asc')->take(1)->get();  // for sorting filtering commands 
        //$posts = DB::select('select * from posts', [1]); //here is also an example of using SQL directly
        $posts = Post::orderBy('id', 'desc')->paginate(10); //this one gets the pagination and needs links in index.blade.php
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>  'required',
            'body' => 'required'
            
        ]);
        //Finally creating the post into DB
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();
        
        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show ')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //check for correct user
        if (auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'You are not authorized to edit that post!');
        }
        return view('posts.edit ')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>  'required',
            'body' => 'required'
            
        ]);
        //Finally creating the post into DB
        $post = Post::find($id); //this is the only change from [SHOW], everything else can be the same
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        
        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
                //check for correct user
                if (auth()->user()->id !==$post->user_id) {
                    return redirect('/posts')->with('error', 'You are not authorized to edit that post!');
                }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted');
    }
}
