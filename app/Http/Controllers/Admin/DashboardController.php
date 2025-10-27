<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $stats = [
            'total_orders' => Order::count(),
            'total_products' => Product::count(),
            'total_customers' => Customer::count(),
            'recent_orders' => Order::with('customer')
                ->latest()
                ->take(5)
                ->get()
        ];

        return view('admin.dashboard.index', compact('stats'));
    }
}
