@extends('layouts.dashboard')

@section('content')

<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Users</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary" href="">Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive pt-0">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>sales</td>
                            <td>Doctor</td>
                            <td>Gianka33012@gmail.com</td>
                            <td class="d-flex">
                                <a class="edit-button btn btn-sm btn-info" href="">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete" action="" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="">
                                    <button type="submit" class="delete-button btn btn-sm btn-danger">
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
