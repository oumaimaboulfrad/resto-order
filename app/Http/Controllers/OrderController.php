<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
{
    // إنشاء الطلب
    $order = Order::create([
        'user_id' => 1, // مؤقتاً
        'total_price' => 1000, // مؤقتاً
        'status' => 'pending'
    ]);

    // مثال: نحطو منتج واحد فقط
    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => 1,
        'quantity' => 1
    ]);

    return redirect('/products')->with('success', 'Commande confirmée 🎉');
}

public function invoice($id)
{
    $order = Order::findOrFail($id);

    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('invoice', compact('order'));

    return $pdf->download('facture.pdf');
}
    
}



