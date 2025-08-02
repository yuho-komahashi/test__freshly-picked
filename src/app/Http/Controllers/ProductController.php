<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function register()
    {
        return view('register');
    }
    
    public function update()
    {
        return view('details');
    }
}
