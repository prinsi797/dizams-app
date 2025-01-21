<?php

namespace App\Http\Controllers;

use App\Mail\OrderNotification;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller {
    public function orderStore(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'total_amount' => $request->amount
            ]);
            // Mail::to('prinsi@kryzetech.com')->send(new OrderNotification($order));
            $ownerEmail = 'prinsi@kryzetech.com';
            Mail::to($ownerEmail)->send(new OrderNotification($order));

            return response()->json([
                'message' => 'Order created successfully',
                'order' => $order
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error creating order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}