<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;
use Exception;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with(['galleries'])->latest()->take(10)->get();
        $brands = Brand::all();
        $blogs = Blog::latest()->take(6)->get();

        // dd($blogs);
        return view('frontend.index', compact('products', 'blogs', 'brands'));
    }

    public function news()
    {
        $blogs = Blog::latest()->paginate(10)->withQueryString();

        //footer
        $brands = Brand::all();

        return view('frontend.blogs', compact('blogs', 'brands'));
    }

    public function newsdetail(Blog $blog)
    {
        $item = Blog::where('slug', $blog->slug)->firstOrFail();
        $recents = Blog::latest()->take(6)->get();
        $previous = Blog::where('id', $blog->id-1)->first();
        $next = Blog::where('id', $blog->id+1)->first();
        // dd($next);

        //footer
        $brands = Brand::all();

        return view('frontend.blog-detail', compact('item', 'brands', 'recents', 'previous', 'next'));
    }

    public function brands(Brand $brand)
    {
        $items = Product::where('brands_id', $brand->id)->with(['galleries'])->get();
        dd($items);
        return view('frontend.index', compact('items'));
    }

    public function aboutus()
    {
        //footer
        $brands = Brand::all();

        return view('frontend.aboutus', compact('brands'));
    }

    public function details(Request $request, $slug)
    {
        $product = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $recommendations = Product::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.details', compact('product', 'recommendations'));
    }

    public function cartadd(Request $request, $id)
    {
        Cart::create([
            'users_id' => Auth::user()->id,
            'products_id' => $id
        ]);

        return redirect('cart');
    }

    public function cartdelete(Request $request, $id)
    {
        $item = Cart::findOrFail($id);

        $item->delete();

        return redirect('cart');
    }

    public function cart(Request $request)
    {
        $carts = Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();

        return view('pages.frontend.cart', compact('carts'));
    }

    public function checkout(CheckoutRequest $request)
    {
        $data = $request->all();

        // get cart data //
        $carts = Cart::with(['product'])->where('users_id', Auth::user()->id)->get();

        // add data transaction //
        $data['users_id'] = Auth::user()->id;
        $data['total_price'] = $carts->sum('product.price');

        // create transaction //
        $transaction = Transaction::create($data);

        // create transaction item //
        foreach ($carts as $cart)
        {
            $items[] = TransactionItem::create([
                'transactions_id' => $transaction->id,
                'users_id' => $cart->users_id,
                'products_id' => $cart->products_id
            ]);
        }

        // delete cart after checkout //
        Cart::where('users_id', Auth::user()->id)->delete();

        // config midtrans //
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        $midtrans = [
            'transaction_details' => [
                'order_id' => 'sea-' . $transaction->id,
                'gross_amount' => (int) $transaction->total_price
            ],
            'customer_details' => [
                'first_name' => $transaction->name,
                'email' => $transaction->email
            ],
            'enabled_payments' => ['gopay', 'bank_transfer'],
            'vtweb' => []
        ];

        //payment proses
        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

            $transaction->payment_url = $paymentUrl;
            $transaction->save();

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function success(Request $request)
    {
        return view('pages.frontend.success');
    }
}
