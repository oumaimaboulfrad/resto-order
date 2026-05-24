<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index(Request $request)
{
    $search = $request->search;

    $products = Product::when($search, function($query, $search){
        return $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($search) . '%']);
    })->get();

    return view('products.index', compact('products'));
}

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $request->image
        ]);

        return redirect('/products');
    }
    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'category' => $request->category,
        'image' => $request->image
    ]);

    return redirect('/products');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('/products');
}
public function addToCart($id)
{
    $product = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "image" => $product->image,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);

    return redirect('/products');
}

public function cart()
{
    $cart = session()->get('cart', []);
    return view('products.cart', compact('cart'));
}
public function checkout()
{
    $cart = session()->get('cart', []);

    if(empty($cart)) {
        return redirect('/products');
    }

    $total = 0;

    foreach($cart as $item){
        $total += $item['price'] * $item['quantity'];
    }

    // إنشاء الطلب
    $order = Order::create([
        'user_id' => 1, // مؤقت
        'total_price' => $total,
        'status' => 'pending'
    ]);

    // إضافة المنتجات
    foreach($cart as $id => $item){
        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $id,
            'quantity' => $item['quantity']
        ]);
    }

    // تفريغ السلة
    session()->forget('cart');

    return redirect('/products')->with('success', 'Commande validée 😍');
}
public function admin()
{
    $products = Product::all();
    return view('admin.dashboard', compact('products'));
}
public function rate($id, $value)
{
    $product = Product::find($id);
    $product->rating = $value;
    $product->save();

    return redirect('/products');
}
 }