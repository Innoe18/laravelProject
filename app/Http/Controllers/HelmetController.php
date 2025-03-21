<?php

namespace App\Http\Controllers;
use App\Models\Helmet;

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
        $helmets = \App\Models\Helmet::orderBy('votes', 'desc')->get();
        return view('helmets.index', compact('helmets'));
    }
    public function vote($id)
{
    // Get the authenticated user
    $user = auth()->user();

    // Count how many helmet votes this user has cast
    $votesCount = \App\Models\HelmetVote::where('user_id', $user->id)->count();

    // Check if the user has reached the limit of 2 votes
    if ($votesCount >= 2) {
        return redirect()->back()->with('message', 'You have reached your voting limit.');
    }

    // Create a new vote record for this helmet
    \App\Models\HelmetVote::create([
        'user_id' => $user->id,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
