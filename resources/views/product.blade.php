<x-authlayout>
    <div class="mx-auto max-w-6xl px-4 pt-0 pb-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-2">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div
                class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-1 rounded-lg bg-gray-200 p-4 shadow-sm shadow-indigo-100">
                <a href="#" class="sm:col-span-2 ">
                    <img alt=""
                        src="{{ asset('storage/products/' . $product->productPics->first()->id . '.jpg') }}"
                        class="h-100 w-100 rounded-md object-cover" />
                </a>
                <div class="mt-2 flex justify-center lg:flex-row sm:flex-col sm:justify-center sm:items-center">
                    @foreach ($product->productPics as $pp)
                        <img alt="" src="{{ asset('storage/products/' . $pp->id . '.jpg') }}"
                            class="h-16 w-16 lg:h-16 lg:w-16 md:h-24 md:w-24 rounded-md object-cover" />
                    @endforeach
                </div>
            </div>
            <div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm lg:col-span-2 bg-gray-200">
                <dl class="-my-3 divide-y divide-gray-100 text-sm">
                    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Product</dt>
                        <dd class="text-gray-700 sm:col-span-2">{{ $product->name }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Category</dt>
                        <ul class="">
                            @foreach ($product->productCategories as $c)
                                <dd class="text-gray-700 sm:col-span-2">
                                    {{ $c->category->name }}</dd>
                            @endforeach
                        </ul>
                    </div>

                    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Price</dt>
                        <dd class="text-gray-700 sm:col-span-2">{{ $product->price }}</dd>
                    </div>

                    <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Description</dt>
                        <dd class="text-gray-700 sm:col-span-2">
                            {{ $product->description }}
                        </dd>
                    </div>
                    <div class="flex items-center sm:grid gap-1 p-3 sm:grid-cols-3 sm:gap-4">

                        {{-- <dt class="font-medium text-gray-900">Add to Cart</dt>
                        <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd> --}}
                        <div class="flex items-center">
                            <button type="button" id="decrement-button-4"
                                data-input-counter-decrement="counter-input-4"
                                class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" id="counter-input-4" data-input-counter
                                class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                                placeholder="" value="1" required />
                            <button type="button" id="increment-button-4"
                                data-input-counter-increment="counter-input-4"
                                class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                        <form action="/checkout/{{ $product->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="count" id="count-input">
                            <button id="add-to-cart" type="button"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium  text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                                </svg>
                                Buy Now
                            </button>
                        </form>

                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="mx-auto max-w-8xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex flex-col items-center">
            <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Review Product</h2>
        </div>
        <div class="py-4 px-4"></div>
        <div class="mt-6 relative px-4">
            <x-swiper-review></x-swiper-review>
        </div>
    </div>

    <div class="">
        <div class="mx-auto max-6-xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex flex-col items-center">
                <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Related Product</h2>
            </div>
            <div class="mt-6">
                <x-swiper></x-swiper>
            </div>
        </div>
    </div>

    <x-footer>
        <script>
            // Mendapatkan elemen input dan tombol
            const input = document.getElementById('counter-input-4');
            const decrementButton = document.getElementById('decrement-button-4');

            // Menambahkan event listener untuk tombol decrement
            decrementButton.addEventListener('click', function() {
                if (parseInt(input.value) < 2) {
                    input.value = 2;
                }
            });
        </script>
        <script>
            document.getElementById('add-to-cart').addEventListener('click', function(e) {
                e.preventDefault();
                // Ambil nilai counter dari input
                var counterValue = parseInt(document.getElementById('counter-input-4').value);

                // Set nilai ke hidden input
                document.getElementById('count-input').value = counterValue;
                console.log(counterValue);

                // Submit form
                e.target.closest('form').submit();
            });
        </script>
    </x-footer>
</x-authlayout>
