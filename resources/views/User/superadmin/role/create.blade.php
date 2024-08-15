@extends('layouts.dashboard')

@section('content')
<div class="card border-0">

    <div class="card-header bg-transparent">
        <div class="">
            <h3 class="card-title">Add New Role</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a {{ route('superadmin.user.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Role</li>
                </ol>
            </nav>
        </div>
        <a class="btn btn-primary" href="{{ route('superadmin.role.index') }}">Back to list</a>
    </div>
    <div class="card-body">
        <form action="" method="post" class="row">
            <input type="hidden" name="_token" value="Jh6QXAbfucu4dZhDXIFa6eacE0xciGnNLfGBKwNL">
            <div class="col-md-5 input-component mb-2">
                <label for="66bbffa1d29f4" class="form-label fw-bold">
                    Role Name <span class="text-danger">*</span> </label>
                <input type="text" id="66bbffa1d29f4" placeholder="Enter Here" class="form-control " value=""
                    name="name" required>

            </div>

            <div class="col-lg-12">
                <div class="row justify-content-between align-content-center mb-1">
                    <div class="col-lg-4">
                        <h4><i class="fa fa-list-alt"></i> Modules</h4>
                    </div>
                    <div class="col-lg-2 float-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checked-all">
                            <label class="form-check-label" for="checked-all">
                                Checked All
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row pe-4">
                    <div class="shadow-sm rounded-3 py-1 mb-2 bg-light mx-1">
                        <div class="row">
                            <div class="col-lg-3">
                                <h4 class="mb-0">Role</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[1]"
                                                type="checkbox" value="role.index" id="role-index">
                                            <label class="form-check-label" for="role-index">
                                                Index
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[2]"
                                                type="checkbox" value="role.create" id="role-create">
                                            <label class="form-check-label" for="role-create">
                                                Create
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[3]"
                                                type="checkbox" value="role.store" id="role-store">
                                            <label class="form-check-label" for="role-store">
                                                Store
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[4]"
                                                type="checkbox" value="role.edit" id="role-edit">
                                            <label class="form-check-label" for="role-edit">
                                                Edit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[5]"
                                                type="checkbox" value="role.update" id="role-update">
                                            <label class="form-check-label" for="role-update">
                                                Update
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[6]"
                                                type="checkbox" value="role.destroy" id="role-delete">
                                            <label class="form-check-label" for="role-delete">
                                                Delete
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-sm rounded-3 py-1 mb-2 bg-light mx-1">
                        <div class="row">
                            <div class="col-lg-3">
                                <h4 class="mb-0">User</h4>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[7]"
                                                type="checkbox" value="user.index" id="user-index">
                                            <label class="form-check-label" for="user-index">
                                                Index
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[8]"
                                                type="checkbox" value="user.create" id="user-create">
                                            <label class="form-check-label" for="user-create">
                                                Create
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[9]"
                                                type="checkbox" value="user.store" id="user-store">
                                            <label class="form-check-label" for="user-store">
                                                Store
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[10]"
                                                type="checkbox" value="user.edit" id="user-edit">
                                            <label class="form-check-label" for="user-edit">
                                                Edit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[11]"
                                                type="checkbox" value="user.update" id="user-update">
                                            <label class="form-check-label" for="user-update">
                                                Update
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input action-check" name="permissions[12]"
                                                type="checkbox" value="user.destroy" id="user-delete">
                                            <label class="form-check-label" for="user-delete">
                                                Delete
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection
