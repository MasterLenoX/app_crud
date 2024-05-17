<?php

namespace App\Http\Controllers;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create.add');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|number',
            'price'=>'required|decimal:2',
            'desc'=>'nullable'
        ]);

        $newProduct = ProductsModel::create($data);
        return redirect(route('product.index'));
    }
}
