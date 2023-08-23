<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all(); // Fetch data from the Banner model
        return view('home', ['banners' => $banners]); // Pass data to the home view
    }
}