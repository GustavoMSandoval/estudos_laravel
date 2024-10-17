<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;
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

        //Gate::authorize('verProduto', $produto);
        
        if(Gate::allows('verProduto', $produto)) {
            return view('site.details', compact('produto'));
        }

        if(Gate::denies('verProduto', $produto)) {
            return redirect()->route('site.index');
        }

        return view('site.details', compact('produto'));
    }

    public function categoria($id) {
        
        $categoria = Category::find($id);

        $produtos = Product::where('category_id', $id)->paginate(3);
        return view('site.categoria', compact('produtos','categoria'));
    }
}
