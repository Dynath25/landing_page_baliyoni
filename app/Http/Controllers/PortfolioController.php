<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::where('is_active', 'active')->get();
        return view('portfolio', [
            'partials._portfolios' => $portfolios
        ]);
    }
}
