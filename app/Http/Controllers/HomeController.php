<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\Slider;
use App\Models\ArticleNews;
use App\Models\BannerAdvertisemenet;
use App\Models\BannerInformation;
use App\Models\Focuses;
use App\Models\Partnership;
use App\Models\People;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch Roadmap data
        $roadmapItems = Roadmap::orderBy('display_order')->get()->groupBy('year_range');
        
        // Fetch Slider data
        $sliders = Slider::where('is_active', true)->get();
        
        // Fetch Banners
        $banners = BannerAdvertisemenet::all(); 
        
        // Fetch all articles to display on the home page (e.g., the 6 latest)
        $articles = ArticleNews::latest()->take(6)->get();
        // Fetch People data
        $peoples = People::where('is_active', true)->get();
        $partnerships = Partnership::where('is_active', 'active')->get();
        $title = 'PT Integrasi Jasa Nusantara';
        // Fetch Focuses data
        $focuses = Focuses::where('is_active', true)->get();
        // Fetch Portfolios data
        $portfolios = Portfolio::where('is_active', 'active')->get();
        // Ambil banner persegi terbaru yang aktif
        $squareBanner = BannerInformation::where('is_active', true)
                                        ->where('type', 'square')
                                        ->latest()
                                        ->get();

        // Ambil banner persegi panjang terbaru yang aktif
        $rectangularBanner = BannerInformation::where('is_active', true)
                                            ->where('type', 'rectangle')
                                            ->latest()
                                            ->get();
        
        // Pass all data to the home view
        return view('home', compact('roadmapItems', 'sliders', 'title', 'articles', 'banners', 'peoples', 'partnerships','focuses','portfolios', 'squareBanner', 'rectangularBanner'));
    }
}