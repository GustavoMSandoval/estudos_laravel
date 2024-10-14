<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function index()
    {
        
        $produtos = Product::paginate(3);

        return view('site.home',compact('produtos'));
    }

    public function details($slug) {
        $produto = Product::where('slug',$slug)->first();

        return view('site.details', compact('produto'));
    }
}
