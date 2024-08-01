<div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="add_sales">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full space-y-4">
        <div class="flex justify-between items-center">
            <h5 class="font-semibold text-xl">Sell Product</h5>
            <button type="button" onclick="document.getElementById('add_sales').classList.add('hidden')"
                aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <form method="POST" action="{{ route('sales.store') }}" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Product <span
                            class="text-red-500">*</span></label>
                    <select
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        name="product">
                        <!-- Options would be dynamically populated similar to the original code -->
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" value="1"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        name="quantity">
                </div>
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-green-600 text-white rounded hover:bg-green-700">Save
                Changes</button>
        </form>
    </div>
</div>
