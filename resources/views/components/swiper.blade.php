<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach ($products as $p)
                <div class="swiper-slide">
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 md:h-80 h-96">
                            <img src="{{ asset('/storage/products/' . $p->productPics->first()->id . '.jpg') }}"
                                alt="Front of men&#039;s Basic Tee in black."
                                class="object-cover object-center h-full w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="/product/{{ $p->id }}">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $p->name }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $p->units }} in stock</p>
                            </div>
                            <p class="text-sm font-medium
                            text-gray-900">{{ $p->price }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 2000, // Waktu antara pergeseran slide dalam milidetik
                disableOnInteraction: false, // Lanjutkan autoplay meskipun pengguna berinteraksi
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // Pengaturan untuk ukuran layar di atas 1024px
                1200: {
                    slidesPerView: 4, // Menampilkan 3 slide pada layar besar
                    spaceBetween: 30, // Jarak antar slide
                },
                1024: {
                    slidesPerView: 3, // Menampilkan 3 slide pada layar besar
                    spaceBetween: 30, // Jarak antar slide
                },
                // Pengaturan untuk ukuran layar di atas 768px
                768: {
                    slidesPerView: 2, // Menampilkan 2 slide pada layar sedang
                    spaceBetween: 20,
                },
                550: {
                    slidesPerView: 2, // Menampilkan 2 slide pada layar sedang
                    spaceBetween: 30,
                },
                // Pengaturan untuk ukuran layar di atas 480px
                480: {
                    slidesPerView: 1, // Menampilkan 1 slide pada layar kecil
                    spaceBetween: 10,
                }
            }
        });
    </script>
</body>

</html>
