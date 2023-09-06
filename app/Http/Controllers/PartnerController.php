<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{

    public function index()
    {
        $partners = Partner::all();
        return view('partner.index', compact('partners'));
    }


    public function show($slug)
    {
        $partner = Partner::where('slugs', $slug)->firstOrFail();
        return view('show', compact('partner'));
    }

    
}


