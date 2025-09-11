<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fullName = $request->input('fullName');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $note = $request->input('note'); 
        $products = $request->input('products'); 

        $order = Order::create([
            'fullName' => $fullName,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'note' => $note,
        ]);

        foreach($products as $product){
            $order->details()->create([
                'order_id' => $order['order_id'],
                'product_id' => $order['product_id'],
                'quantity' => $order['quantity'],
            ]);
        }

        $order->load('details');
        return response()->json(['data',$fullName], 201);
    }
}
