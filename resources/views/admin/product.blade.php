<x-adminlayout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700">

            <button type="button" id="open-modal"
                class="text-blue-700 my-4 hover:text-white border
                border-blue-700 hover:bg-blue-800 focus:ring-4
                focus:outline-none focus:ring-blue-300 font-medium rounded-lg
                text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500
                dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500
                dark:focus:ring-blue-800">Add
                New</button>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                <div class="pb-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search for items">
                    </div>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Units
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $p->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $p->units }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->price }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class=" flex gap-2">
                                        <button
                                            class="font-medium text-green-600-600
                                    dark:text-blue-500 hover:underline"
                                            id="edit-prod"
                                            onclick="fillEditForm('{{ $p->name }}', '{{ $p->price }}', '{{ $p->units }}', '{{ $p->description }}','{{ $p->id }}' )">Edit</button>
                                        <form method="post" action="/admin/deleteproduct/{{ $p->id }}">
                                            @csrf
                                            <button type="submit"
                                                class="font-medium text-red-600
                                    dark:text-blue-500
                                    hover:underline">
                                                Delate</button>
                                        </form>
                                        <a href="/product/{{ $p->id }}"
                                            class="font-medium text-blue-600
                                    dark:text-blue-500 hover:underline">Details</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="edit-overlay" class="hidden fixed inset-0 bg-gray-200 flex justify-center items-center">
            <form class="max-w-sm md:max-w-lg mx-auto mt-10 w-full modal-form" method="POST" id="form-edit">
                @csrf
                <div class="mb-5">
                    <label for="name-e"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Product
                        name</label>
                    <input type="name" id="name-e" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Iphone 16 Pro Max" required />
                </div>
                <div class="mb-5">
                    <label for="price-e"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Price</label>
                    <input type="number" id="price-e" name="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="16000000" required />
                </div>
                <div class="mb-5">
                    <label for="units-e"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Units</label>
                    <input type="number" id="units-e" name="units"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="1" required />
                </div>


                <div class="mb-5">
                    <label for="message-e"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Product
                        Description</label>
                    <textarea id="message-e" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
            focus:outline-none focus:ring-blue-300 font-medium rounded-lg
            text-sm px-5 py-2.5 text-center dark:bg-blue-600
            dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit
                    Product</button>
            </form>
        </div>


        <div id="modal-overlay" class="hidden fixed inset-0 bg-gray-200 flex justify-center items-center">
            <form class="max-w-sm md:max-w-lg mx-auto mt-5 w-full modal-form" action="/admin/createproduct"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="name"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Product
                        name</label>
                    <input type="name" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Iphone 16 Pro Max" required />
                </div>
                <div class="mb-2">
                    <label for="price"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Price</label>
                    <input type="number" id="price" name="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="16000000" required />
                </div>
                <div class="mb-2">
                    <label for="units"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Units</label>
                    <input type="number" id="units" name="units"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="1" required />
                </div>



                <h3 class="block mb-2 text-sm font-medium
                text-gray-900 dark:text-white">Check
                    Category</h3>

                <div class="flex flex-wrap bg-blue-200 p-1 rounded-lg">
                    @foreach ($category as $index => $c)
                        <div class="w-1/4 mb-2">
                            <div class="flex items-center">
                                <input id="category-{{ $c->id }}" type="checkbox"
                                    value="{{ $c->id }}" name="categories[]"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="category-{{ $c->id }}"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $c->name }}</label>
                            </div>
                        </div>

                        @if (($index + 1) % 4 == 0)
                            <div class="w-full"></div>
                        @endif
                    @endforeach
                </div>


                <div class="mb-2">
                    <label for="message"
                        class="block mb-2 text-sm font-medium
            text-gray-900 dark:text-white">Product
                        Description</label>
                    <textarea id="message" rows="4" name="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>
                </div>


                <div class="mb-2">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input">Upload
                        file</label>
                    <input name="file_input[]"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="file_input" type="file" multiple>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG
                        (MAX. 800x400px).</p>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
            focus:outline-none focus:ring-blue-300 font-medium rounded-lg
            text-sm px-5 py-2.5 text-center dark:bg-blue-600
            dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create
                    Product</button>
            </form>
        </div>
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

        document.getElementById('open-modal').addEventListener('click', function() {
            document.getElementById('modal-overlay').classList.remove('hidden');
        });
        document.getElementById('edit-prod').addEventListener('click', function() {
            document.getElementById('edit-overlay').classList.remove('hidden');
        });
        document.getElementById('edit-overlay').addEventListener('click', function(event) {
            if (event.target === this) {
                this.classList.add('hidden');
            }
        });

        document.getElementById('modal-overlay').addEventListener('click', function(event) {
            if (event.target === this) {
                this.classList.add('hidden');
            }
        });

        function fillEditForm(productName, price, units, description, id) {
            console.log(productName)
            document.getElementById('name-e').value = productName;
            document.getElementById('price-e').value = price;
            document.getElementById('units-e').value = units;
            document.getElementById('message-e').value = description;
            document.getElementById('form-edit').action =
                `/admin/editproduct/${id}`

            // Show the modal
            document.getElementById('edit-overlay').classList.remove('hidden');
        }

        document.getElementById('table-search').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const name = row.querySelector('th').textContent.toLowerCase();
                if (name.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</x-adminlayout>
