<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class ProductController extends Controller
{
    public function index()
    {
        $title = "products";
        $products = Product::with('purchase')->get();
        return view('products', compact('title', 'products'));
    }

    public function create()
    {
        $title = "Add Product";
        $products = Purchase::all();
        return view('add-product', compact('title', 'products'));
    }

    public function expired()
    {
        $title = "expired Products";
        $products = Purchase::whereDate('expiry_date', '=', Carbon::now())->get();
        return view('expired', compact('title', 'products'));
    }

    public function outstock()
    {
        $title = "outstocked Products";
        $products = Purchase::where('quantity', '<=', 0)->get();
        return view('outstock', compact('title', 'products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|exists:purchases,id|max:200',
            'price' => 'required|numeric|min:1',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'nullable|max:200',
        ]);

        $price = $request->price;
        if ($request->discount > 0) {
            $price -= ($request->discount / 100) * $request->price;
        }

        try {
            Product::create([
                'purchase_id' => $request->product,
                'price' => $price,
                'discount' => $request->discount,
                'description' => $request->description,
            ]);

            return redirect()->route('products')->with([
                'message' => "Product has been added",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['Error adding product: ' . $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $title = "Edit Product";
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products')->withErrors(['Product not found']);
        }

        $purchased_products = Purchase::all();
        return view('edit-product', compact('title', 'product', 'purchased_products'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product' => 'required|exists:purchases,id|max:200',
            'price' => 'required|numeric|min:1',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'nullable|max:200',
        ]);

        $price = $request->price;
        if ($request->discount > 0) {
            $price -= ($request->discount / 100) * $request->price;
        }

        try {
            $product->update([
                'purchase_id' => $request->product,
                'price' => $price,
                'discount' => $request->discount,
                'description' => $request->description,
            ]);

            return redirect()->route('products')->with([
                'message' => "Product has been updated",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['Error updating product: ' . $e->getMessage()]);
        }
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->id);

        if (!$product) {
            return back()->withErrors(['Product not found']);
        }

        try {
            $product->delete();

            return back()->with([
                'message' => "Product has been deleted",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['Error deleting product: ' . $e->getMessage()]);
        }
    }
}