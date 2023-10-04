<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    // public function index(){
    //     return view('Frontend.Aboutus');
    //   }





// }
// }
public function showAboutUs()
{
    // Get all team members
    $teams = Team::all();

    // Get the "about us" category ID from the categories table
    $aboutUsCategory = Category::where('name', 'techburg_about')->first();

    // Check if the "about us" category exists
    if ($aboutUsCategory) {
        // Retrieve the data only if the "about us" category exists
        $aboutUsData = post::where('category_id', $aboutUsCategory->id)->first();

        // dd($aboutUsData->title);
    } else {
        $aboutUsData = null;
    }

    // Return the view with the data
    return view('Frontend.pages.Aboutus', ['aboutUsData' => $aboutUsData, 'teams' => $teams]);
}


}



