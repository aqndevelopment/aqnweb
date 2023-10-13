<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourteam;

class OurteamController extends Controller
{
    public function index()
    {
        $ourteam = Ourteam::orderBy('sort', 'asc')->get(); // Fetch data from the ourteam model

        // Pass all data to the home view using a single associative array
        return view('ourteam', [
            'ourteam' => $ourteam,
        ]);
    }
}




