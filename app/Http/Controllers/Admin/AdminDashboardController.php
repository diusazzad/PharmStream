<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $title = 'Dashboard';

            // Assuming new Artisan commands for data retrieval
            $totals = $this->fetchTotals();
            $totalExpiredProducts = $this->fetchTotalExpiredProducts();
            $latestSales = $this->fetchLatestSales();
            $todaySales = $this->fetchTodaySales();

            return view('admin.dashboard', compact('title', 'totals', 'totalExpiredProducts', 'latestSales', 'todaySales'));
        } catch (\Exception $e) {
            Log::error("An error occurred in the dashboard index method: {$e->getMessage()}");

            return redirect()->route('home')->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    private function fetchTotals(): array
    {
        return [
            'totalPurchases' => Purchase::where('expiry_date', '!=', now())->count(),
            'totalCategories' => Category::count(),
            'totalSuppliers' => Supplier::count(),
            'totalSales' => Sale::count(),
        ];
    }

    private function fetchTotalExpiredProducts(): int
    {
        return Purchase::whereDate('expiry_date', '=', now())->count();
    }

    private function fetchLatestSales(): Collection
    {
        return Sale::whereDate('created_at', '=', now())->get();
    }

    private function fetchTodaySales(): float
    {
        return Sale::whereDate('created_at', '=', now())->sum('total_price');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
