<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Transaksi;

class PageController extends Controller
{

    // Starting Admin Section

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables(TransaksiController $transaksi)
    {
        $transaksi = $transaksi->index();
        return view('pages.tables', compact('transaksi'));
    }

    public function product(ProductsController $product)
    {
        $product = $product->index();
        return view('pages.product', compact('product'));
    }
    // End of Admin Section

    // Starting User Section

    public function showProduct()
    {
        return view('pages.userProduct');
    }
    // End of Admin Section
}
