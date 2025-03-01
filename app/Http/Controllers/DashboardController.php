<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sales;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use Fx3costa\LaravelChartJs\Chartjs;

class DashboardController extends Controller
{
    // protected $chartjs;

    public function __construct()
    {
        // $this->chartjs = $chartjs;
    }

    public function index()
    {
        $title = "dashboard";

        try {
            $total_purchases = Purchase::where('expiry_date', '=', Carbon::now())->count();
            $total_categories = Category::count();
            $total_suppliers = Supplier::count();
            $total_sales = Sales::count();

            // $pieChart = $this->chartjs
            //     ->type('pie')
            //     ->size(['width' => 400, 'height' => 200])
            //     ->labels(['Total Purchases', 'Total Suppliers', 'Total Sales'])
            //     ->datasets([
            //         [
            //             'backgroundColor' => ['#FF6384', '#36A2EB', '#7bb13c'],
            //             'hoverBackgroundColor' => ['#FF6384', '#36A2EB', '#7bb13c'],
            //             'data' => [$total_purchases, $total_suppliers, $total_sales]
            //         ]
            //     ])
            //     ->options([]);

            $total_expired_products = Purchase::whereDate('expiry_date', '=', Carbon::now())->count();
            $latest_sales = Sales::whereDate('created_at', '=', Carbon::now())->get();
            $today_sales = Sales::whereDate('created_at', '=', Carbon::now())->sum('total_price');

            return view('dashboard', compact(
                'title',
                // 'pieChart',
                'total_expired_products',
                'latest_sales',
                'today_sales',
                'total_categories'
            ));
        } catch (\Exception $e) {
            Log::error('Error generating dashboard: ' . $e->getMessage());
            return back()->withErrors('Unable to load dashboard at this time.');
        }
    }
}
