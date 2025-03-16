<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    // Display a listing of memes.
    public function index()
    {
        $memes = Meme::latest()->get();
        return view('memes.index', compact('memes'));
    }

    // Show the form for creating a new meme.
    public function create()
    {
        return view('memes.create');
    }

    // Store a newly created meme in storage.
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image',
            'description' => 'nullable'
        ]);

        // Handle file upload.
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/memes'), $imageName);
            $data['image_path'] = $imageName;
        }

        // Optionally, assign the user ID if a user is authenticated.
        if (auth()->check()) {
            $data['user_id'] = auth()->id();
        }

        Meme::create($data);

        return redirect()->route('memes.index')->with('message', 'Meme added successfully!');
    }

    // Display the specified meme.
    public function show(Meme $meme)
    {
        return view('memes.show', compact('meme'));
    }

    // Show the form for editing the specified meme.
    public function edit(Meme $meme)
    {
        return view('memes.edit', compact('meme'));
    }

    // Update the specified meme in storage.
    public function update(Request $request, Meme $meme)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/memes'), $imageName);
            $data['image_path'] = $imageName;
        }

        $meme->update($data);

        return redirect()->route('memes.index')->with('message', 'Meme updated successfully!');
    }

    // Remove the specified meme from storage.
    public function destroy(Meme $meme)
    {
        $meme->delete();
        return redirect()->route('memes.index')->with('message', 'Meme deleted successfully!');
    }
}
