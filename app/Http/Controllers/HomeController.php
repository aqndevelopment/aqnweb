<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Partner;
use App\Models\Kliens;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all(); // Fetch data from the Banner model
        $partners = Partner::all(); // Fetch data from the Partners model
        $clientele = Kliens::all(); // Fetch data from the Kliens model
        
        // Pass all data to the home view using a single associative array
        return view('home', [
            'banners' => $banners,
            'partners' => $partners,
            'kliens' => $clientele
        ]);
    }
}