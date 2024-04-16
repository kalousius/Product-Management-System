<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showDashboard()
    {
        $products = Product::all();
        $categories = Category::all();
        
        return view('dashboard', compact('products', 'categories'));
    }
}