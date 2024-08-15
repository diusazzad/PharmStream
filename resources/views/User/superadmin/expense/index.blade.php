@extends('layouts.dashboard')

@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Expenses</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Expenses</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/expenses/create">Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive pt-0">
                <form action="" method="get" class="row mb-2">
                    <div class="col-lg-4">
                        <input type="date" value="" name="date" class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-primary waves-effect waves-float waves-light"><i
                                class="fa fa-search"></i></button>
                    </div>
                </form>
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Expense For</th>
                            <th>Reference No</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2024-06-25</td>
                            <td>Shop rent</td>
                            <td>Shop Rant</td>
                            <td>Ggg</td>
                            <td>₹1,000.00</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expenses/edit/5">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expenses/delete/5" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>2024-06-21</td>
                            <td>Shop rent</td>
                            <td>shoprent</td>
                            <td>dsfsdf</td>
                            <td>₹500.00</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expenses/edit/4">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expenses/delete/4" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2024-06-02</td>
                            <td>Shop rent</td>
                            <td>KOdi ya ibanda</td>
                            <td>Nimemlipa na tumesahinishana mkataba wa hadi tarehe 01/06/2025</td>
                            <td>₹999,999.99</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expenses/edit/3">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expenses/delete/3" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2024-05-26</td>
                            <td>Shop rent</td>
                            <td>Mac</td>
                            <td></td>
                            <td>₹20,000.00</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expenses/edit/2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expenses/delete/2" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>2024-05-14</td>
                            <td>Energia</td>
                            <td>tesr</td>
                            <td></td>
                            <td>₹582.00</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expenses/edit/1">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expenses/delete/1" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="4H5hzs2neWWQ1hVId52OC5FeyQ5lIRnRzxVEFMgx"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-end"><b>Total</b></td>
                            <td><b>₹1,022,081.99</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
