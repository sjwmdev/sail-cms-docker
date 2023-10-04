<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        return view('auth.posts.featuresform');
    }

    // Show a specific custom page
    public function show($page)
    {
        
        return view("custom-pages.$page");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

       
        $feature = new Feature();
        $feature->title = $validatedData['title'];
        $feature->description = $validatedData['description'];

        $feature->save();

        // Redirect with a success message
        return 'success Feature data has been added successfully.';
    }

}




