<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\BannerAdvertisemenet;
use App\Models\BannerInformation;
use App\Models\Slider;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        // Get ALL articles for the list page
        $articles = ArticleNews::latest()->get(); // Using latest()->get() is common
        $banners = BannerAdvertisemenet::all(); 
        $sliders = Slider::where('is_active', true)->get();
        $squareBanner = BannerInformation::where('is_active', true)
                                        ->where('type', 'square')
                                        ->latest()
                                        ->get();

        // Ambil banner persegi panjang terbaru yang aktif
        $rectangularBanner = BannerInformation::where('is_active', true)
                                            ->where('type', 'rectangle')
                                            ->latest()
                                            ->get();

        // Return the INDEX view (the list of articles)
        return view('article_news.index', compact('articles', 'banners', 'sliders', 'squareBanner', 'rectangularBanner'));
    }
    
    /**
     * Display the specified article.
     */
    public function show($slug)
    {
        // Get ONE article for the detail page
        $article = ArticleNews::where('slug', $slug)->firstOrFail();

        // Return the SHOW view (the single article page)
        return view('article_news.show', compact('article'));
    }
}