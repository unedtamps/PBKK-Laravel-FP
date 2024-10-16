<x-adminlayout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Transaction Proof
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Payment Method
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Shipping Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $tr)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{ asset('storage/transaction/' . $tr->transaction_proof . '.jpg') }}">
                                        <img width="50px"
                                            src="{{ asset('storage/transaction/' . $tr->transaction_proof . '.jpg') }}"
                                            alt="{{ $tr->id }}">
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $tr->payment_method }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $tr->shipping_address }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $tr->amount }}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="/admin/transaction/confirm/{{ $tr->id }}"
                                        class="font-medium text-white bg-green-600
                                    p-2 rounded-md
                                    dark:text-blue-500 hover:underline mx-1
                                   inline "
                                        method="post">
                                        @csrf
                                        <button>Confirm</button>
                                    </form>
                                    <form action="/admin/transaction/cancel/{{ $tr->id }}" method="POST"
                                        class="font-medium text-red-600 bg-red-200
                                    p-2 rounded-lg
                                    dark:text-blue-500 hover:underline inline
                                    mx-1">
                                        @csrf
                                        <button>Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $transactions->links() }}
    </div>


    <script>
        const toggleButton = document.querySelector('[data-drawer-toggle="default-sidebar"]');
        const sidebar = document.getElementById('default-sidebar');

        // Toggle the sidebar when clicking the button
        toggleButton.addEventListener('click', function(e) {
            sidebar.classList.toggle('-translate-x-full');
            e.stopPropagation(); // Stop event from bubbling to document
        });

        // Close the sidebar when clicking outside of it
        document.addEventListener('click', function(e) {
            if (!sidebar.contains(e.target) && !toggleButton.contains(e.target)) {
                if (!sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });
    </script>
</x-adminlayout>
