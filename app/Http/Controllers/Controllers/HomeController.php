<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil array seluruhnya dari config/portfolio.php
        $portfolio = config('portfolio');
        
        return view('pages.home', compact('portfolio'));
    }
}