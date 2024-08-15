@extends('layouts.dashboard')

@section('content')
<section class="page-wrapper">
    <div class="card border-0">
        <div class="card-header bg-transparent">
            <div class="">
                <h3 class="card-title">Languages</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Languages</li>
                    </ol>
                </nav>
            </div>
            <a class="btn btn-primary waves-effect waves-float waves-light"
                href="https://demopharma.ayaantec.com/languages/create">Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive pt-0">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>iso</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ENGLISH</td>
                            <td>
                                <img height="20" width="20"
                                    src="https://demopharma.ayaantec.com/public/images/noimage.png" alt="">
                                <span>INDIA</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/languages/edit/11">
                                    <i class="fa fa-edit"></i>
                                </a> <a
                                    class="btn btn-sm btn-warning border-radius-50 text-white waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/languages/update/terms/11">
                                    <i class="fa fa-edit"></i> Edit Terms
                                </a>
                                <form onclick="return confirm('Are you sure?')" class="delete"
                                    action="https://demopharma.ayaantec.com/languages/delete/11" method="POST">
                                    <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                        name="_token" value="EcswWufpkzkYkWnUd0qbjLgJPIJCLnCTzJkrsJhK"> <button
                                        type="submit"
                                        class="delete-button btn btn-sm btn-danger waves-effect waves-float waves-light">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>English</td>
                            <td>
                                <img height="20" width="20"
                                    src="https://demopharma.ayaantec.com/public/storage/language/2024-05-17-6647c9d153dd0.png"
                                    alt="">
                                <span>en</span>
                            </td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td class="d-flex gap-1">
                                <a class="edit-button btn btn-sm btn-info waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/languages/edit/1">
                                    <i class="fa fa-edit"></i>
                                </a> <a
                                    class="btn btn-sm btn-warning border-radius-50 text-white waves-effect waves-float waves-light"
                                    href="https://demopharma.ayaantec.com/languages/update/terms/1">
                                    <i class="fa fa-edit"></i> Edit Terms
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
