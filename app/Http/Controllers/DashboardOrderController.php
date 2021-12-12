<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardOrderController extends Controller
{
    public function index()
    {
         return view('dashboard.orders.index', [
            'orders' => Order::all()
        ]);
    }

    public function destroy(Order $order)
    {
        Order::destroy($order->id);
        return redirect('/dashboard/orders')->with('success', 'Post has been deleted!');
    }
}
