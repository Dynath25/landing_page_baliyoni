<?php

namespace App\Http\Controllers;
use App\Models\BannerAdvertisemenet;
use Illuminate\Http\Request;

class BannerAdvertisemenetController extends Controller
{
    //
    public function index()
    {
        $banners = BannerAdvertisemenet::where('is_active', 'active')->get();
        dd($banners);
        return view('articles_news.index', [
            'banners'=> $banners
        ]);

    }

}
