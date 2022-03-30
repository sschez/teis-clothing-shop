<?php
//Jose Alejandro Sanchez
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id){ 
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] = $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);    
    }

    public function create()
    {
        $viewData = []; 
        $viewData["title"] = "Create product";
        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name","price"]));
        return back();
    }

}