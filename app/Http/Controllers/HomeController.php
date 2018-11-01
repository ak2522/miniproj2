<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    //public function profile()
    //{
        // $users = User::all();
        //$user = Auth::user();
      //  $post = new Post();
      //  $post->title = 'My Post';
       // $post->body = 'Another body';
        //$user->posts()->save($post);
        //you need to call posts to retrieve records without the ()
        //$posts = $user->posts;
     //   return view('profile', ['posts' => $posts]);
   // }

}
