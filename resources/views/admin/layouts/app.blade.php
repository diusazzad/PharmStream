<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{-- {{ ucfirst(AppSettings::get('app_name', 'PharmStream')) }} - {{ ucfirst($title ?? '') }} --}}
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
        {{-- href=" {{ !empty(AppSettings::get('favicon')) ? asset('storage/' . AppSettings::get('favicon')) : asset('assets/img/favicon.png') }}"> --}}
    {{-- < Bootstrap CSS> --}}
    <link rel="stylesheet"
        href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <!-- Snackbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/snackbar/snackbar.min.css') }}">
    <!-- Sweet Alert css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- Snackbar Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/snackbar/snackbar.min.css') }}">
    <!-- Select2 Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Page CSS -->
    @stack('page-css')

    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('admin.includes.header')
        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.includes.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        @stack('page-header')
                    </div>
                </div>
                <!-- /Page Header -->
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <x-alerts.danger :error="$error" />
                    @endforeach
                @endif

                @yield('content')
                <!-- add sales modal-->
                <x-modals.add-sale />
                <!-- / add sales modal -->
            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

</body>
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}">
    fsda
</script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- Sweet Alert Js -->
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Snackbar Js -->
<script src="{{ asset('assets/plugins/snackbar/snackbar.min.js') }}"></script>
<!-- Select2 JS -->
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
    // Function to delete resource
    function deleteResource(id, route) {
        swal.queue([{
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: '<i class="fe fe-trash mr-1"></i> Delete!',
            cancelButtonText: '<i class="fa fa-times mr-1"></i> Cancel!',
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ml-2 mt-2",
            buttonsStyling: false,
            preConfirm: function() {
                return new Promise(function(resolve) {
                    $.ajax({
                        url: route,
                        type: "DELETE",
                        data: {
                            id: id
                        },
                        success: function() {
                            swal.close();
                            showToast("Deleted!", "success");
                            reloadDataTable();
                        }
                    });
                });
            }
        }]);
    }

    // Function to show toast notification
    function showToast(message, type) {
        var snackbarOptions = {
            text: message,
            actionTextColor: '#fff',
            backgroundColor: getBackgroundColor(type),
            pos: 'top-right'
        };
        Snackbar.show(snackbarOptions);
    }

    // Function to get background color based on alert type
    function getBackgroundColor(type) {
        switch (type) {
            case 'info':
                return '#2196f3';
            case 'warning':
                return '#e2a03f';
            case 'success':
                return '#8dbf42';
            case 'danger':
                return '#e7515a';
            default:
                return '#000'; // Default color
        }
    }

    // Function to reload DataTable
    function reloadDataTable() {
        $('.datatable').DataTable().ajax.reload();
    }

    // Attach click event listener
    $('body').on('click', '#deletebtn', function() {
        var id = $(this).data('id');
        var route = $(this).data('route');
        deleteResource(id, route);
    });

    // Show session message if exists
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        showToast("{{ Session::get('message') }}", type);
    @endif
</script>
<!-- Page JS -->
@stack('page-js')

<!-- Page JS -->
@stack('page-js')

</html>
