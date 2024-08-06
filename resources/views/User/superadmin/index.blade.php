@extends('layouts.dashboard')

@section('page_title', 'Page Specific Title')
@section('page_description', 'A brief description of the page.')

@section('content')
<div class="content-header row">
    <div class="content-body">
        <div class="row my-2">
            <div class="col-lg-8">
                <div class="card border-0 border-r20 py-1">
                    <div class="card-header bg-transparent border-0">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 mb-1 col-6">
                                <div class="small-box first">
                                    <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                        <div class="icon">
                                            <i class="fas fa-pills fa-2xl"></i>
                                        </div>
                                        <div class="inner">
                                            <h3>8,901</h3>
                                        </div>
                                    </div>
                                    <a href="report/instock-medicine" class="small-box-footer">
                                        <span>Stock Medicine</span> <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-1 col-6">
                                <div class="small-box second">
                                    <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                        <div class="icon">
                                            <i class="fas fa-usd fa-2xl"></i>
                                        </div>
                                        <div class="inner">
                                            <h3>₹5,317,993.30</h3>
                                        </div>
                                    </div>
                                    <a href="https://demopharma.ayaantec.com/invoice/reports" class="small-box-footer">
                                        <span>Total Sales</span> <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-1 col-6">
                                <div class="small-box third">
                                    <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                        <div class="icon">
                                            <i class="fas fa-hourglass-end fa-2xl"></i>
                                        </div>
                                        <div class="inner">
                                            <h3>10</h3>
                                        </div>
                                    </div>
                                    <a href="https://demopharma.ayaantec.com/report/already-expire-medicine"
                                        class="small-box-footer">
                                        <span>Expired Medicine</span> <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-1 col-6">
                                <div class="small-box fourth">
                                    <div class="smalll-box d-flex justify-content-between flex-column gap-1">
                                        <div class="icon">
                                            <i class="fa-brands fa-product-hunt fa-2xl"></i>
                                        </div>
                                        <div class="inner">
                                            <h3>10</h3>
                                        </div>
                                    </div>
                                    <a href="https://demopharma.ayaantec.com/report/stockout-medicine"
                                        class="small-box-footer">
                                        <span>Stock Out Medicine</span> <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 border-r20">
                    <div class="card-header bg-transparent border-0">
                        <h4 class="card-title">Purchases &amp; Sales</h4>
                    </div>
                    <div class="card-body">
                        <div id="line-example" style="height: 180px;color: red" class="line-atl morris-chart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="dashboard-ecommerce">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="card border-0 border-r20">
                        <div class="card-header">
                            <h4>Others</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col statistic px-2 col-border-right">
                                    <div class="text text-dark text-center text-capitalize">
                                        <h4 class="count">49</h4>
                                        <h6 class="mb-0">Total Customer</h6>
                                    </div>
                                </div>
                                <div class="col statistic px-2 col-border-right">
                                    <div class="text text-dark text-center text-capitalize">
                                        <h4 class="count">209</h4>
                                        <h6 class="mb-0">Total Manufacturer</h6>
                                    </div>
                                </div>
                                <div class="col statistic px-2 col-border-right">
                                    <div class="text text-dark text-center text-capitalize">
                                        <h4 class="count">₹1,740.80</h4>
                                        <h6 class="mb-0">Total Cash In Hand </h6>
                                    </div>
                                </div>
                                <div class="col statistic px-2">
                                    <div class="text text-dark text-center text-capitalize">
                                        <h4 class="count">₹2,093,696.95</h4>
                                        <h6 class="mb-0">Total Customer Due</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="basic-table">
                        <div class="col-md-6 col-sm-12">
                            <div class="card border-0 border-r20">
                                <div class="card-header bg-primary border-0">
                                    <h4 class="card-title Titlee">Today's sell</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Today Invoice
                                                </td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Sold Amount
                                                </td>
                                                <td>₹0.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Received Amount
                                                </td>
                                                <td>₹0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">

                            <div class="card border-0 border-r20">
                                <div class="card-header bg-success border-0">
                                    <h4 class="card-title Titlee">Today&#039;s Purchase </h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Today Purchase</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Purchase Amount</td>
                                                <td>₹0.00</td>
                                            </tr>
                                            <tr>
                                                <td>Paid Amount</td>
                                                <td>₹0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="card border-0 border-r20">
                        <div class="card-header bg-transparent border-0">
                            <div class="header-left">
                                <h4 class="card-title" style="color:#000; font-weight:600;">
                                    Purchases &amp; Sales
                                </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="piChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection