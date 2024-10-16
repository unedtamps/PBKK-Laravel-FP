<x-authlayout>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Payment</h2>

                <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                    <form action="/transaction" enctype="multipart/form-data" method="POST"
                        class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                        @csrf
                        <input type="hidden" id="harga_total" name="harga">
                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="full_name"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Full name*
                                </label>
                                <input type="text" id="full_name" name="nama_customer"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Your name" required />
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="card-address-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Address*
                                </label>
                                <input type="text" id="card-address-input" name="address"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Your address" required />
                            </div>

                            <div>
                                <label for="payment-method-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Payment Method*
                                </label>

                                <select id="payment-method-input"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 "
                                    required>
                                    <option value="" disabled selected>Payment method</option>
                                    <option value="BCA">BCA</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="E-Money">E-Money</option>
                                </select>
                            </div>
                            <div>
                                <label for="card-number-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Card number
                                </label>

                                <p
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">

                                    1234567789
                                </p>
                            </div>
                            <div class="col-span-2">
                                <label for="image-upload"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Upload Bukti Pembayaran*
                                </label>
                                <input id="image-upload" type="file" name="image-upload" accept="image/*"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PNG, JPG, GIF up to 2MB</p>
                            </div>
                        </div>

                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Pay
                            now</button>
                    </form>

                    <div class="mt-6 grow sm:mt-8 lg:mt-0">
                        <div
                            class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Price</dt>
                                    <dd id="price" class="text-base font-medium text-gray-900 dark:text-white">
                                        Rp {{ $product->price }}</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Count</dt>
                                    <dd id="count" class="text-base font-medium text-gray-900">{{ $count }}
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                    <dd id="storePickup" class="text-base font-medium text-gray-900 dark:text-white">
                                        Rp 99</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd id="tax" class="text-base font-medium text-gray-900 dark:text-white">
                                        Rp 73178899</dd>
                                </dl>
                            </div>

                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd id="total" class="text-base font-bold text-gray-900 dark:text-white"></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    <script>
        // Fungsi untuk memformat angka dengan titik setiap 3 angka dari belakang
        function formatCurrency(value) {
            return new Intl.NumberFormat('id-ID').format(value);
        }

        // Fungsi untuk mengambil nilai dari elemen dan membersihkan simbol non-numerik
        function getCleanedNumber(id) {
            return parseFloat(document.getElementById(id).textContent.replace(/[^0-9.-]+/g, ""));
        }

        // Fungsi untuk memformat elemen dengan angka
        function formatElement(id) {
            const value = getCleanedNumber(id);
            if (id != 'count') {
                document.getElementById(id).textContent = `Rp ${formatCurrency(value)}`;
            }
        }

        // Fungsi untuk menghitung total dan memformat semua elemen
        function calculateTotal() {
            const price = getCleanedNumber('price');
            const count = getCleanedNumber('count');
            const storePickup = getCleanedNumber('storePickup');
            const tax = getCleanedNumber('tax');

            // Menghitung total
            const total = (price * count) + storePickup + tax;

            // Format dan tampilkan nilai total
            document.getElementById('total').textContent = `Rp ${formatCurrency(total)}`;

            // Memformat elemen-elemen lain
            formatElement('price');
            formatElement('count');
            formatElement('storePickup');
            formatElement('tax');

            document.getElementById('harga_total').value=total;
        }

        // Panggil fungsi untuk menghitung dan memformat total saat halaman dimuat
        calculateTotal();
    </script>

</x-authlayout>
