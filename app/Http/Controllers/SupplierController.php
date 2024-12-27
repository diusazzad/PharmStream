<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $title = "Suppliers";
            $suppliers = Supplier::all();
            return view('suppliers', compact('title', 'suppliers'));
        } catch (\Exception $e) {
            Log::error('Error fetching suppliers: ' . $e->getMessage());
            return back()->withErrors('Unable to retrieve suppliers at this time.');
        }
    }

    /**
     * Display a form for adding the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $title = "Add Supplier";
            $products = Product::all();
            return view('add-supplier', compact('title', 'products'));
        } catch (\Exception $e) {
            Log::error('Error fetching products: ' . $e->getMessage());
            return back()->withErrors('Unable to retrieve products at this time.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'product' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'company' => 'max:200|required',
            'address' => 'required|max:200',
            'description' => 'max:200',
        ]);

        try {
            Supplier::create($request->only([
                'name',
                'email',
                'phone',
                'company',
                'address',
                'product',
                'description'
            ]));

            return redirect()->route('suppliers')->with([
                'message' => "Supplier has been added",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error adding supplier: ' . $e->getMessage());
            return back()->withErrors('Unable to add supplier at this time.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $title = "Edit Supplier";
            $products = Product::all();
            $supplier = Supplier::findOrFail($id);
            return view('edit-supplier', compact('title', 'products', 'supplier'));
        } catch (\Exception $e) {
            Log::error('Error fetching supplier: ' . $e->getMessage());
            return back()->withErrors('Unable to retrieve supplier at this time.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name' => 'required',
            'product' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'company' => 'max:200|required',
            'address' => 'required|max:200',
            'description' => 'max:200',
        ]);

        try {
            $supplier->update($request->only([
                'name',
                'email',
                'phone',
                'company',
                'address',
                'product',
                'description'
            ]));

            return redirect()->route('suppliers')->with([
                'message' => "Supplier has been updated",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating supplier: ' . $e->getMessage());
            return back()->withErrors('Unable to update supplier at this time.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $supplier = Supplier::findOrFail($request->id);
            $supplier->delete();

            return back()->with([
                'message' => "Supplier has been deleted",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error deleting supplier: ' . $e->getMessage());
            return back()->withErrors('Unable to delete supplier at this time.');
        }
    }
}
