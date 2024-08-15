@extends('layouts.dashboard')

@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Expense Categories</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Expense Categories</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/expense-categories/create">Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive pt-0">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Energia</td>
                            <td></td>
                            <td>active</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expense-categories/edit/1">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expense-categories/delete/1" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="V6e5OTBbhaJWlYmXEgayl2zCYDbid5fDWtDItNhH"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Shop rent</td>
                            <td></td>
                            <td>active</td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/expense-categories/edit/2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/expense-categories/delete/2" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="V6e5OTBbhaJWlYmXEgayl2zCYDbid5fDWtDItNhH"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
