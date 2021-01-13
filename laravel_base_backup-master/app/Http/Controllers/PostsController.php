<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    public function show($slug){
        // // access DB class from the local namespace route
        //$post = \DB::table('posts')->where('slug', $slug)->first();

        // // create an array for the wildcard to match
        // $posts = [
        //     'my-first-post' => 'Hello, this is my first blog post!',
        //     'my-second-post' => 'Now I am getting the hang of this blogging thing.'
        // ];

        // // produce 404 error if wildcard doesnt match array contents
        // if (! array_key_exists($post, $posts)){
        //     abort(404, 'Sorry, that post was not found.');
        // }

        // // produces a 4040 error if post doesn't exist
        // if (! $post) {
        //     abort(404);
        // }

        // get post from the DB where the slug is a match or produce 404 error
        // load a view called post, pass a value associated with the slug
        return view('post',[
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
