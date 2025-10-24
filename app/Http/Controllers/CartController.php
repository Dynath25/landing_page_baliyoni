<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Menampilkan halaman keranjang belanja.
     */
    public function index()
    {
        // Ambil data keranjang dari session
        $cartItems = session()->get('cart', []);

        $initialCartItems = [];
        foreach($cartItems as $id => $details) {
            $initialCartItems[] = [
                'id' => $id,
                'name' => $details['name'],
                'image' => asset('storage/' . $details['image']),
                'price' => $details['price'],
                'quantity' => $details['quantity'],
            ];
        }

        return view('cart', [
            'title' => 'Shopping Cart',
            'cartItems' => $cartItems,
            'initialCartItems' => $initialCartItems
        ]);
    }

    /**
     * Menambahkan produk ke keranjang.
     */
    public function add(Request $request, Product $product)
    {
        // Ambil jumlah dari form, jika tidak ada, defaultnya 1
        $quantity = $request->input('quantity', 1);

        // Ambil keranjang yang ada di session
        $cart = session()->get('cart', []);
        
        // Cek apakah produk sudah ada di keranjang
        if (isset($cart[$product->id])) {
            // Jika sudah ada, tambahkan jumlahnya sesuai input
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            // Jika produk baru, set jumlahnya sesuai input
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    /**
     * Mengupdate jumlah item di keranjang.
     */
    public function update(Request $request, $productId)
    {
        $cart = session()->get('cart', []);

        // Pastikan produk ada di keranjang dan jumlahnya valid
        if (isset($cart[$productId]) && $request->quantity > 0) {
            $cart[$productId]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Keranjang berhasil diperbarui.');
    }

    /**
     * Menghapus item dari keranjang.
     */
    public function remove($productId)
    {
        $cart = session()->get('cart', []);

        // Hapus item dari array keranjang
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}

