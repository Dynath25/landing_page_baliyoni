<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{ 
    public function index()
    {
        $peoples = People::where('is_active', true)->get();
        return view('people', compact('peoples'));
    }
}
