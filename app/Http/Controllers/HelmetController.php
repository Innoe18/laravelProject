<?php

namespace App\Http\Controllers;

use App\Models\Helmet;
use App\Models\HelmetVote; // Ensure this model exists
use Illuminate\Http\Request;

class HelmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $helmets = Helmet::orderBy('votes', 'desc')->get();
        return view('helmets.index', compact('helmets'));
    }

    /**
     * Process a vote for a helmet.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vote($id)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->back()->with('message', 'Please log in or register to vote.');
        }
        
        // Block admin voting based on email check
        if ($user->email === 'admin@admin.com') {
            return redirect()->back()->with('message', 'Admin users cannot vote.');
        }
        
        // Count how many helmet votes this user has cast
        $votesCount = \App\Models\HelmetVote::where('user_id', $user->id)->count();

        // Check if the user has reached the limit of 2 votes
        if ($votesCount >= 2) {
            return redirect()->back()->with('message', 'You have reached your voting limit.');
        }

        // Create a new vote record for this helmet
        HelmetVote::create([
            'user_id'   => $user->id,
            'helmet_id' => $id,
        ]);

        // Increment the vote count on the helmet
        $helmet = Helmet::findOrFail($id);
        $helmet->increment('votes');

        return redirect()->back()->with('message', 'Thanks for voting!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('helmets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'inspiration' => 'required|string',
            'image'       => 'required|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Helmet::create([
            'title'       => $request->input('title'),
            'inspiration' => $request->input('inspiration'),
            'image_path'  => $newImageName,
            'votes'       => 0,
            'is_winner'   => false,
        ]);

        return redirect()->route('helmets.index')->with('message', 'New helmet added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Implement as needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $helmet = Helmet::findOrFail($id);
        return view('helmets.edit', compact('helmet'));
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
        // Only allow admin to update
        $user = auth()->user();
        if (!$user || $user->email !== 'admin@admin.com') {
            return redirect()->back()->with('message', 'You do not have permission to update this helmet.');
        }

        $helmet = Helmet::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'inspiration' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $helmet->title = $request->input('title');
        $helmet->inspiration = $request->input('inspiration');

        if ($request->hasFile('image')) {
            $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $newImageName);
            $helmet->image_path = $newImageName;
        }

        $helmet->save();

        return redirect()->route('helmets.index')->with('message', 'Helmet updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->user();
        if ($user && $user->email === 'admin@admin.com') {
            $helmet = Helmet::findOrFail($id);
            $helmet->delete();
            return redirect()->route('helmets.index')->with('message', 'Helmet deleted successfully.');
        }

        return redirect()->back()->with('message', 'You do not have permission to delete this helmet.');
    }
}
