<h1>📦 Commandes</h1>

@foreach($orders as $order)
    <div>
        <p>Total: {{ $order->total_price }} DA</p>
        <p>Status: {{ $order->status }}</p>
    </div>
@endforeach