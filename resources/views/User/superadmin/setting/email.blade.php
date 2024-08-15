@extends('layouts.dashboard')

@section('content')
<div class="card-header bg-transparent">
    <div class="">
        <h3 class="card-title">Email Settings</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://demopharma.ayaantec.com/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Email Settings</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6 ">
        <h4>Email Setting</h4>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL DRIVER</label>
            <input type="text" name="MAIL_DRIVER" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL HOST</label>
            <input type="text" name="MAIL_HOST" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL PORT</label>
            <input type="text" name="MAIL_PORT" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL USERNAME</label>
            <input type="text" name="MAIL_USERNAME" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL PASSWORD</label>
            <input type="text" name="MAIL_PASSWORD" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL ENCRYPTION</label>
            <input type="text" name="MAIL_ENCRYPTION" value="" class="form-control">
        </div>
        <div class="form-group mb-2 mt-2">
            <label class="">MAIL FROM ADDRESS</label>
            <input type="text" name="MAIL_FROM_ADDRESS" value="" class="form-control"
                placeholder="info@companyname.com">
        </div>
        <div class="form-group mb-2">
            <label class="">MAIL FROM NAME</label>
            <input type="text" name="MAIL_FROM_NAME" value="" class="form-control" placeholder="Company name">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row">
            <div class="text-end">
                <button type="submit" class="btn btn-primary btn-block mt-2 waves-effect waves-float waves-light">Save
                    Changes
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
