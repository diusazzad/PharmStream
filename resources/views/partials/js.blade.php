<script type="text/javascript" src="{{ asset('auth/dashboard/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('auth/dashboard/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('auth/dashboard/js/vendors.min.js') }}"></script>

<script src="{{ asset('auth/dashboard/js/toastr.min.js') }}"></script>
<script src="{{ asset('auth/dashboard/js/app-menu.js') }}"></script>
<script src="{{ asset('auth/dashboard/js/app.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#stockmodal').modal('show');
    });
</script>

<script src="{{ asset('auth/dashboard/morris-chart/popper.min.js') }}"></script>
<script src="{{ asset('auth/dashboard/morris-chart//raphael-min.js') }}"></script>
<script src="{{ asset('auth/dashboard/morris-chart/morris.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    Morris.Line({
        element: 'line-example',
        data: [{"y":"2024-07-25","a":0,"b":0},{"y":"2024-07-26","a":3,"b":1},{"y":"2024-07-27","a":4,"b":4},{"y":"2024-07-28","a":18,"b":1},{"y":"2024-07-29","a":11,"b":2},{"y":"2024-07-30","a":4,"b":1},{"y":"2024-07-31","a":2,"b":1},{"y":"2024-08-01","a":0,"b":0}],
        xkey: 'y',
        labelColor: '#000000',
        ykeys: ['a', 'b'],
        labels: ['Sales', 'Purchase']
    });
</script>


<script>
    var options = {
        series: [1077661.8, 5317993.3],
        chart: {
            width: 380,
            type: 'pie',
        },
        colors: ['#0088ff', '#f8bf15'],
        labels: ['Purchase', 'Sales'],
        legend: {
            position: 'bottom',
            show: true,
            showForSingleSeries: false,
            showForNullSeries: true,
            showForZeroSeries: true,
        },
    };

    var chart = new ApexCharts(document.querySelector("#piChart"), options);
    chart.render();
</script>

<!-- END: Page JS-->

<script>
    $(window).on('load', function () {
    if (feather) {
        feather.replace({
            width: 14,
            height: 14
        });
    }
})
</script>

<script type="text/javascript"></script>