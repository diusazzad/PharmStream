<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PurchaseController extends Controller
{
    public function index()
    {
        try {
            $title = "Purchases";
            $purchases = Purchase::with('category')->get();
            return view('purchases', compact('title', 'purchases'));
        } catch (\Exception $e) {
            Log::error('Error fetching purchases: ' . $e->getMessage());
            return back()->withErrors('Unable to retrieve purchases at this time.');
        }
    }

    public function create()
    {
        try {
            $title = "Add Purchase";
            $categories = Category::all();
            $suppliers = Supplier::all();
            return view('add-purchase', compact('title', 'categories', 'suppliers'));
        } catch (\Exception $e) {
            Log::error('Error fetching categories or suppliers: ' . $e->getMessage());
            return back()->withErrors('Unable to retrieve data at this time.');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'category' => 'required',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'expiry_date' => 'required|date',
            'supplier' => 'required',
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,gif',
        ]);

        try {
            $imageName = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('storage/purchases'), $imageName);
            }

            Purchase::create([
                'name' => $request->name,
                'category_id' => $request->category,
                'supplier_id' => $request->supplier,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'expiry_date' => $request->expiry_date,
                'image' => $imageName,
            ]);

            return redirect()->route('purchases')->with([
                'message' => "Purchase has been added",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error adding purchase: ' . $e->getMessage());
            return back()->withErrors('Unable to add purchase at this time.');
        }
    }

    public function show($id)
    {
        try {
            $title = "Edit Purchase";
            $purchase = Purchase::findOrFail($id);
            $categories = Category::all();
            $suppliers = Supplier::all();
            return view('edit-purchase', compact('title', 'purchase', 'categories', 'suppliers'));
        } catch (\Exception $e) {
            Log::error('Error fetching purchase: ' . $e->getMessage());
            return redirect()->route('purchases')->withErrors('Purchase not found.');
        }
    }

    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'name' => 'required|max:200',
            'category' => 'required',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:1',
            'expiry_date' => 'required|date',
            'supplier' => 'required',
            'image' => 'nullable|file|image|mimes:jpg,jpeg,png,gif',
        ]);

        try {
            $imageName = $purchase->image;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('storage/purchases'), $imageName);
            }

            $purchase->update([
                'name' => $request->name,
                'category_id' => $request->category,
                'supplier_id' => $request->supplier,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'expiry_date' => $request->expiry_date,
                'image' => $imageName,
            ]);

            return redirect()->route('purchases')->with([
                'message' => "Purchase has been updated",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating purchase: ' . $e->getMessage());
            return back()->withErrors('Unable to update purchase at this time.');
        }
    }

    public function destroy(Request $request)
    {
        try {
            $purchase = Purchase::findOrFail($request->id);
            $purchase->delete();

            return back()->with([
                'message' => "Purchase has been deleted",
                'alert-type' => 'success',
            ]);
        } catch (\Exception $e) {
            Log::error('Error deleting purchase: ' . $e->getMessage());
            return back()->withErrors('Unable to delete purchase at this time.');
        }
    }
}
