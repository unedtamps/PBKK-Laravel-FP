<x-layout>
    <div class="mb-4 md:mb-10">

        <form class="md:max-w-2xl sm:max-w-md max-w-sm mx-auto" action="/products" method="get">
            <!-- Custom width set to 800px -->

            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos..." required name="search" />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
            <div class="flex items-start justify-start gap-3">

                <div class="flex items-start justify-start  md:py-2 py-3 ">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="button">
                        Filter by category
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                            Category
                        </h6>
                        <ul class="space-y-2 text-sm overflow-y-auto" aria-labelledby="dropdownDefault">
                            @foreach ($categories as $c)
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" name="categories[]"
                                        value="{{ $c->id }}"
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        {{ $c->name }}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>


                </div>

                <div class="flex items-start justify-start  md:py-2 py-3 ">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown2"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="button">
                        Filter by Price
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div id="dropdown2" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                            Price
                        </h6>
                        <div class="mb-5">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900
                            dark:text-white">Minimum
                                Price</label>
                            <input type="text" id="base-input"
                                class="bg-gray-50 border border-gray-300
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5
                            dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white
                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="10.000" name="min_price">
                        </div>
                        <div class="mb-5">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900
                            dark:text-white">Maximum
                                Price</label>
                            <input type="text" id="base-input"
                                class="bg-gray-50 border border-gray-300
                            text-gray-900 text-sm rounded-lg focus:ring-blue-500
                            focus:border-blue-500 block w-full p-2.5
                            dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white
                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="100.000" name="max_price">
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
    <div class="flex flex-wrap justify-center mx-auto
    bg-gray-50 max-w-screen-xl p-5 md:p-6 gap-6 ">
        @foreach ($products as $p)
            <div class="card bg-base-100 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 shadow-xl">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        {{ $p->name }}
                    </h2>
                    <span class="text-red-500 font-bold">Rp.{{ number_format($p->price) }},00</span>
                    <p>{{ Str::limit($p->description, 80) }}</p>
                    <span class="rounded-lg w-2/3 p-1 font-bold"> {{ $p->units }} in stock</span>
                    <div class="card-actions justify-end">
                        @foreach ($p->productCategories as $c)
                            <a href="/products?category={{ $c->category->id }}"
                                class="badge badge-outline block ">{{ $c->category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-5 mx-4">
        {{ $products->links() }}
    </div>

    <script>
        window.addEventListener("load", function(event) {
            document.querySelector('[data-dropdown-toggle="dropdown"]').click();
        });
        window.addEventListener("load", function(event) {
            document.querySelector('[data-dropdown-toggle="dropdown2"]').click();
        });
    </script>
</x-layout>
