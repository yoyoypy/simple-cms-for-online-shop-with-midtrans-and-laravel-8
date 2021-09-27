<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries'])->latest()->take(10)->get();
        // dd($products);
        return view('pages.frontend.index')->with([
            'products' => $products
        ]);
    }

    public function details(Request $request, $slug)
    {
        return view('pages.frontend.details');
    }

    public function cart(Request $request)
    {
        return view('pages.frontend.cart');
    }

    public function success(Request $request)
    {
        return view('pages.frontend.success');
    }
}
