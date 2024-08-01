document.addEventListener("DOMContentLoaded", function () {
    const table = $('#sales-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('sales.index') }}",
        columns: [
            { data: 'product', name: 'product' },
            { data: 'quantity', name: 'quantity' },
            { data: 'total_price', name: 'total_price' },
            { data: 'date', name: 'date' }
        ],
    });
});
