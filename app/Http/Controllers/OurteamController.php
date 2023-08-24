<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourteam;


class OurteamController extends Controller
{
    public function index()
    {
        $ourteam = Ourteam::all(); // Fetch data from the ourtean model
        
        // Pass all data to the home view using a single associative array
        return view('ourteam', [
            'ourteam' => $ourteam,
        ]);
    }
}