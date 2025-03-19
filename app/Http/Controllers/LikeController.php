<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'likeable_id'   => 'required|integer',
            'likeable_type' => 'required|string',
        ]);

        // Find the likeable model (Post or Meme) using the provided type and id.
        $likeableType = $data['likeable_type']; // e.g., "App\Models\Post" or "App\Models\Meme"
        $likeableId   = $data['likeable_id'];

        $likeable = $likeableType::findOrFail($likeableId);

        // Check if the current user has already liked this item.
        $existingLike = $likeable->likes()->where('user_id', Auth::id())->first();

        if ($existingLike) {
            // If liked, unlike by deleting the record.
            $existingLike->delete();
            return back()->with('message', 'Like removed.');
        } else {
            // Otherwise, create a new like.
            $likeable->likes()->create([
                'user_id' => Auth::id(),
            ]);
            return back()->with('message', 'Liked successfully!');
        }
    }
}
