<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'dashboard';
        $total_purchases = Purchase::where('expiry_date', '!=', Carbon::now())->count();
        $total_categories = Category::count();
        $total_suppliers = Supplier::count();
        $total_sales = Sale::count();

        $pieChart = app()->chartjs
            ->name('pieChart')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Total Purchases', 'Total Suppliers', 'Total Sales'])
            ->datasets([
                [
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#7bb13c'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#7bb13c'],
                    'data' => [$total_purchases, $total_suppliers, $total_sales],
                ],
            ])
            ->options([]);

        $total_expired_products = Purchase::whereDate('expiry_date', '=', Carbon::now())->count();
        $latest_sales = Sale::whereDate('created_at', '=', Carbon::now())->get();
        $today_sales = Sale::whereDate('created_at', '=', Carbon::now())->sum('total_price');
        return view('admin.dashboard', compact(
            'title', 'pieChart', 'total_expired_products',
            'latest_sales', 'today_sales', 'total_categories'
        ));
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