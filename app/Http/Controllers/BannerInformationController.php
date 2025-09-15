<?php

namespace App\Http\Controllers;

use App\Models\BannerInformation;
use Illuminate\Http\Request;

class BannerInformationController extends Controller
{
    public function index()
{
    // Ambil banner persegi terbaru yang aktif
    $squareBanner = BannerInformation::where('is_active', true)
                                     ->where('type', 'square')
                                     ->latest()
                                     ->first();

    // Ambil banner persegi panjang terbaru yang aktif
    $rectangularBanner = BannerInformation::where('is_active', true)
                                          ->where('type', 'rectangle')
                                          ->latest()
                                          ->first();

    // Kirim kedua data ke view
    return view('_information', [
        'squareBanner' => $squareBanner,
        'rectangularBanner' => $rectangularBanner,
        ]);
    }
}
