<?php

namespace App\Http\Controllers;
use App\Models\Helmet;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        // Fetch the top helmet (most votes) and top post (most likes)
        $topHelmet = Helmet::orderBy('votes', 'desc')->first();
        $topPost = Post::withCount('likes')->orderBy('likes_count', 'desc')->first();
        
        return view('index', compact('topHelmet', 'topPost'));
    }
  
    public function about()
    {
        return view('about');
    }
    public function home()
    {
        return $this->index();
    }
    public function helmets()
    {
        return view('helmets');
    }

}
