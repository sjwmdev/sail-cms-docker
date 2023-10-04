<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Team;

class Teamcontroller extends Controller
{

    public function index()
    {    $teamMembers = Team::all();
        return view('auth.posts.indexTeams' ,compact('teamMembers'));
    }


    public function create()
    {

    }

    public function store(Request $request)

   {
    // Validate the incoming data
       $request->validate([
      'name' => 'required|string|max:255',
      'title' => 'required|string|max:255',
      'email' => 'required|email|unique:teams,email',
      'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation as needed
    ]);

    // dd($request->all());

     try {
   // Start a database transaction
    DB::beginTransaction();

   // Handle file upload
   $photoPath = null;
   if ($request->hasFile('file')) {
       $photoPath = $request->file('file')->store('public/images/team');
   }

   //  new Team instance with validated data
   $teamMember = new Team();
   $teamMember->name = $request->input('name');
   $teamMember->position = $request->input('title');
   $teamMember->email = $request->input('email');
   $teamMember->photo = $photoPath;
   $teamMember->save(); // Save the data to the database

   // Commit the database transaction if everything was successful
   DB::commit();


//    return redirect()->route('posts.team_index')->with('success', 'Team member added successfully');
} catch (\Exception $e) {
    DB::rollback();
    dd($e->getMessage());
    $request->session()('alert success', 'post created successifuly');

   return to_route('posts.indexTeams');
}



    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
