<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        return view('auth.posts.servicesform');
    }

    public function icons()
    {
        // Define an array of Font Awesome icons and their names
        $fontAwesomeIcons = [
            'fa-heart' => 'Heart',
            'fa-star' => 'Star',
            'fa-check' => 'Check',
            
        ];
        return view('auth.posts.servicesform', ['fontAwesomeIcons' => $fontAwesomeIcons]);
        // return view('auth.posts.servicesform', compact('fontAwesomeIcons'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            
        ]);

        

        // Create a new instance of the Service model and set its attributes
        $service = new Service();
        $service->title = $validatedData['title'];
        $service->description = $validatedData['description'];
       

        $service->save();

        // Redirect with a success message
        return 'success Service data has been added successfully.';
    }


}
