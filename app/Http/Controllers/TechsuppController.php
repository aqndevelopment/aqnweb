<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechsuppController extends Controller
{
    public function index()
    {

        // Pass all data to the home view using a single associative array
        return view('Techsupport');
    }
}




