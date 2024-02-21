<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('Product')
            ->with('Product1', 'Samsung')
            ->with('Product2', 'Apple')
            ->with('Product3', 'Huawei')
            ->with('Product4', 'Vivo')
            ->with('Product5', 'Oppo')
            ->with('Product6', 'Asus')
            ->with('Product7', 'LG')
            ->with('Product8', 'Xiaomi')
            ->with('Product9', 'Lenovo')
            ->with('Product10', 'HP');
    }
}
?>
