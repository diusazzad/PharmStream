@extends('layouts.dashboard')

@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Add New Expense Categories</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Expense Categories</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/expense-categories/index">Back</a>
        </div>
        <div class="card-body">
            <form action="https://demopharma.ayaantec.com/expense-categories/store" method="post" class="row">
                <input type="hidden" name="_token" value="V6e5OTBbhaJWlYmXEgayl2zCYDbid5fDWtDItNhH">
                <div class="col-md-6 input-component mb-2">
                    <label for="66bdce1b8181c" class="form-label fw-bold">
                        Name <span class="text-danger">*</span> </label>
                    <input type="text" id="66bdce1b8181c" placeholder="Enter Here" class="form-control " value=""
                        name="name" required="">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bdce1b81c36" class="form-label fw-bold">
                        Status </label>
                    <select value="" name="status" id="66bdce1b81c36" class="form-select">
                        <option value="">--Choose--</option>
                        <option value="active" selected="">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>

                </div>

                <div class="col-lg-12 input-component mb-2">
                    <label for="4" class="form-label fw-bold">
                        Description </label>
                    <textarea rows="3" id="4" placeholder="Enter Here" class="text-dark form-control"
                        name="description"></textarea>
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
