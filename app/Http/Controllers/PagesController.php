<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{


    //here small letter request is variable where we store data 
    public function storeproduct(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $data  = $request->all();
        // Product::create($request->all())  ----------- is used to create database
        Product::create($data);
        // index is namespaces
        return redirect(route('index'));
    }

    public function edit($product_id)
    {

        // product_id ko sabbai data tanxa
        $product = Product::find($product_id);
        return view('editproduct', compact('product'));
    }

    public function updateproduct(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $product->update($data);
        return redirect(route('index'));
    }

    public function deleteproduct($id)
    {
        $product = Product::find($id);
        // $product->delete($product->id); // This line also work for the deletion action
        $product->delete();
        return redirect(route('index'));
    }


    public function home()
    {
        // $myname = ' Coo Mar';
        // return view('welcome', compact('myname'));

        $products = Product::all();

        // return view('welcome', compact('myname'));
        return view('welcome', compact('products'));
    }




    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
