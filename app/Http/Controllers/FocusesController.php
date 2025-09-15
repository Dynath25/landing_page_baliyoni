<?php

namespace App\Http\Controllers;

use App\Models\Focuses;
use Illuminate\Http\Request;

class FocusesController extends Controller
{
    public function index()
    {
        // Fetch all Focuses data
        $focuses = Focuses::where('is_active', true)->get();

        // Pass the data to the view
        return view('focuses', compact('focuses'));
    }
}
