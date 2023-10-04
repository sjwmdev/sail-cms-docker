<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        return view('auth.posts.news');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Define validation rules for the image file.
            'content' => 'required|string',
        ]);

        // Upload and store the image file in the "public/images" directory
        $imagePath = $request->file('image')->store('public/images');

        // Create a new instance of the LatestNews model and set its attributes
        $latestNews = new LatestNews();
        $latestNews->title = $validatedData['title'];
        $latestNews->image = $imagePath; 
        $latestNews->content = $validatedData['content'];

        $latestNews->save();

        // Redirect with a success message
        return 'successLatest News data has been added successfully.';
    }


}
