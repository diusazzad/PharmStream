@extends('layouts.dashboard')
@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Add New Expense</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Expense</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/expenses/index">Back</a>
        </div>
        <div class="card-body">
            <form action="https://demopharma.ayaantec.com/expenses/store" method="post" class="row">
                <input type="hidden" name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx">
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd580b01b96" class="form-label fw-bold">
                        Expense Date <span class="text-danger">*</span> </label>
                    <input type="date" id="66bd580b01b96" placeholder="Enter Here" class="form-control " value=""
                        name="date" required="">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd580b01cda" class="form-label fw-bold">
                        Category <span class="text-danger">*</span> </label>
                    <select value="" name="category_id" id="66bd580b01cda" class="form-select" required="">
                        <option value="">--Choose--</option>
                        <option value="1">Energia</option>
                        <option value="2">Shop rent</option>
                    </select>

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd580b01d65" class="form-label fw-bold">
                        Expense For <span class="text-danger">*</span> </label>
                    <input type="text" id="66bd580b01d65" placeholder="Enter Here" class="form-control " value=""
                        name="title" required="">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd580b01e23" class="form-label fw-bold">
                        Amount <span class="text-danger">*</span> </label>
                    <input type="number" id="66bd580b01e23" placeholder="Enter Here" class="form-control " value=""
                        name="amount" required="">

                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="66bd580b01f40" class="form-label fw-bold">
                        Debit Account <span class="text-danger">*</span> </label>
                    <select name="account_id" id="66bd580b01f40" class="form-select" required="">
                        <option value="">--Choose--</option>
                        <option value="1">
                            Cost of Sales
                        </option>
                        <option value="2">
                            Sales
                        </option>
                        <option value="3">
                            Accounts Payable
                        </option>
                        <option value="4">
                            Accounts Receivable
                        </option>
                        <option value="6">
                            Salary
                        </option>
                        <option value="7">
                            Bank
                        </option>
                        <option value="8">
                            Shareholder
                        </option>
                        <option value="9">
                            Tax
                        </option>
                    </select>

                </div>
                <div> </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="6" class="form-label fw-bold">
                        Reference </label>
                    <textarea rows="3" id="6" placeholder="Enter Here" class="text-dark form-control"
                        name="reference"></textarea>
                </div>
                <div class="col-md-6 input-component mb-2">
                    <label for="2" class="form-label fw-bold">
                        Note </label>
                    <textarea rows="3" id="2" placeholder="Enter Here" class="text-dark form-control"
                        name="note"></textarea>
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
