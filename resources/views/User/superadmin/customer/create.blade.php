@extends('layouts.dashboard')

@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Add New Customer</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Customer</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/customers/index">Back to list</a>
        </div>
        <div class="card-body">
            <form action="https://demopharma.ayaantec.com/customers/store" method="post" class="row">
                <input type="hidden" name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx">
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd52fb3b783" class="form-label fw-bold">
                        Name </label>
                    <input type="text" id="66bd52fb3b783" placeholder="Enter Here" class="form-control " value=""
                        name="name">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd52fb3ba30" class="form-label fw-bold">
                        Email </label>
                    <input type="text" id="66bd52fb3ba30" placeholder="Enter Here" class="form-control " value=""
                        name="email">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd52fb3baf0" class="form-label fw-bold">
                        Phone </label>
                    <input type="text" id="66bd52fb3baf0" placeholder="Enter Here" class="form-control " value=""
                        name="phone">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd52fb3bba5" class="form-label fw-bold">
                        Due </label>
                    <input type="number" id="66bd52fb3bba5" placeholder="Enter Here" class="form-control " value=""
                        name="due">

                </div>
                <div class="col-md-12 input-component mb-2">
                    <label for="7" class="form-label fw-bold">
                        Address </label>
                    <textarea rows="3" id="7" placeholder="Enter Here" class="text-dark form-control"
                        name="address"></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
