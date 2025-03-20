<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Helmet;
use App\Models\Post;

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
        // Fetch top helmet (most votes)
        $topHelmet = Helmet::orderBy('votes', 'desc')->first();

        // Fetch top blog post (most likes) - assumes you have a 'likes' relationship on Post
        $topPost = Post::withCount('likes')->orderBy('likes_count', 'desc')->first();

        // If your view file is resources/views/index.blade.php, pass the variables:
        return view('index', compact('topHelmet', 'topPost'));
    }
}
