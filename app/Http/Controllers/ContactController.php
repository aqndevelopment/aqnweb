<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        // Pass all data to the home view using a single associative array
        return view('contact');
    }
}