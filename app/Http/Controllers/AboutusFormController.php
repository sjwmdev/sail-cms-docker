<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutusFormController extends Controller
{
    public function aboutusform()
    {
        return view('auth.posts.create');
    }

    // Show a specific custom page
    public function show($page)
    {
        
        return view("custom-pages.$page");
    }



    public function storedata(Request $request)
    {
    
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload and store the image (assuming you're storing images)
        $imagePath = $request->file('image')->storeAs('public/images' , $request->file('image')->getClientOriginalName());

        // Create a new instance of the AboutUs model and set its attributes
        $aboutUs = new AboutUs();
        $aboutUs->title = $validatedData['title'];
        $aboutUs->description = $validatedData['description'];
        $aboutUs->image = 'images/'. $request->file('image')->getClientOriginalName(); 

    
        $aboutUs->save();

         
        $aboutUsData = AboutUs::all();

        return view('auth.posts.Datatables.indexAboutus', compact('aboutUsData'))->with('success', 'About Us data has been added successfully.');


        
    }
    
       public function publish($id)
{
    dd($id);

    $about = AboutUs::findOrFail($id);
}
}
