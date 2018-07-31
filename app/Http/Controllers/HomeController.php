<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Subscriber;


class HomeController extends Controller
{
    // public function index(){
    //     return view('home.index');
    // }

    public function create(Request $request){
        dd($request->email);
    }

    public function index(Subscriber $subscribers){

        $activesubsribers = $subscribers->active()->get();

        dd($activesubsribers);
        return view('home.index');
    }


    // Date and times
    // public function index(Post $posts){
    //     $post = $posts->find(5);

    //     return view('home.index')->with('post', $post);
    // }

    // creating data
    // public function index(Post $post){
    //     $newPost = new Post;
    //     $newPost->title = 'A new title';
    //     $newPost->body = 'A new body';
    //     $newPost->save();
    //     return view('home.index');
    // }


    // //Fetching data using a Model
    // public function index(Post $post){
    //     $posts = $post->take(0)->get();
    //     return view('home.index')->with('posts', $posts);
    // }

    //JSON request example

    // public function index(){
    //     //pull posts from the DB $somevariable
    //     return response()->json([
    //         'posts' => [
    //             ['id' => 1, 'title' => 'abc'],
    //             ['id' => 2, 'title' => 'def'],
    //             ['id' => 3, 'title' => 'ghi'],
    //         ]
    //     ]);       
    // }
}
