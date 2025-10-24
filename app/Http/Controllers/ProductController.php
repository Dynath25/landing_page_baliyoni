<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {

    $query = Product::where('is_active', true);
    $currentCategory = null;

    if ($request->has('category')) {
        // Asumsi kategori difilter berdasarkan slug-nya
        $slug = $request->query('category');
        $currentCategory = Category::where('slug', $slug)->first();
        if ($currentCategory) {
            $query->where('category_id', $currentCategory->id);
        }
    }

    $sortOption = $request->query('sort', 'default');
    switch ($sortOption) {
        case 'price_asc':
            $query->orderBy('price', 'asc');
            break;
        case 'price_desc':
            $query->orderBy('price', 'desc');
            break;
        default:
            $query->latest(); // Urutan default (terbaru)
            break;
        }

    $products = $query->latest()->get();
    
    // Ambil hanya kategori yang memiliki produk
    $categories = Category::whereHas('products')->get();

    if ($request->header('X-Requested-With') == 'XMLHttpRequest') {
        // Kirim hanya bagian grid produknya saja
        return view('partials._product-grid', ['products' => $products])->render();
    }

    return view('product', [
        'title' => 'Our Products',
        'products' => $products,
        'categories' => $categories,
        'currentCategory' => $currentCategory, // Kirim kategori aktif
    ]);
}
    public function show(Product $product)
    {
        // Ambil produk terkait:
        // - Dari kategori yang sama ($product->category_id)
        // - Bukan produk yang sedang dilihat saat ini ($product->id)
        // - Batasi hanya 4 produk
        $relatedProducts = Product::where('category_id', $product->category_id)
                                ->where('id', '!=', $product->id)
                                ->take(4)
                                ->get();

        return view('detail-produk', [
            'title' => $product->name,
            'product' => $product,
            'relatedProducts' => $relatedProducts // Kirim data produk terkait ke view
        ]);
    }
}