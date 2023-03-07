<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        // $product=Product::latest()->paginate(4);
        $products=Product::latest()->paginate(4); //latest:LIFO
        return view('product.index',['products'=>$products]);
    }

    public function trash()
    {
        $products=Product::onlyTrashed()->latest()->paginate(4); //latest:LIFO
        return view('product.trash',['products'=>$products]);
    }


    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')->with('success','product added successfully');
    }


    public function show(Product $product)
    {
        return view('product.show',['product'=>$product]);
    }


    public function edit(Product $product)
    {

        return view('product.edit',['product'=>$product]);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required'
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success','product updated successfully');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','product deleted successfully');
    }
    public function restore($id)
    {
        Product::onlyTrashed()->where('id',$id)->restore();
        return redirect()->route('products.trash')->with('success','product restored successfully');
    }

    public function forceDelete($id){
        Product::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('products.trash')->with('success','product deleted permanently');
    }
}
