<x-layout>

    <!-- BEGIN HERO SECTION -->
    <div class="relative items-center justify-center w-full lg:pt-40 lg:pb-40 xl:pt-40 xl:pb-64">
        <div
            class="container flex flex-col items-center justify-between h-full max-w-6xl px-8 mx-auto -mt-32 lg:flex-row xl:px-0">
            <div
                class="z-30 flex flex-col items-center w-full max-w-xl pt-48 text-center lg:items-start lg:w-1/2 lg:pt-20 xl:pt-40 lg:text-left">
                <h1 class="relative mb-4 text-3xl font-black leading-tight text-gray-900 sm:text-6xl xl:mb-8">Click.
                    Shop. Smile!</h1>
                <p class="pr-0 mb-8 text-base text-gray-600 sm:text-lg xl:text-xl lg:pr-20"> At ClickNShop, online
                    shopping is easy, fast, and fun! Discover the latest trends and essentials with just a few clicks.
                    Enjoy exclusive deals and quick delivery to your door. ClickNShop — convenience at its best!</p>
                <a href="/products"
                    class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-indigo-600 border-t border-gray-200 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">View
                    More!</a>
                <!-- Integrates with section -->
                <svg class="absolute left-0 max-w-md mt-24 -ml-64 left-svg" viewBox="0 0 423 423"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <linearGradient x1="100%" y1="0%" x2="4.48%" y2="0%"
                            id="linearGradient-1">
                            <stop stop-color="#5C54DB" offset="0%" />
                            <stop stop-color="#6A82E7" offset="100%" />
                        </linearGradient>
                        <filter x="-9.3%" y="-6.7%" width="118.7%" height="118.7%" filterUnits="objectBoundingBox"
                            id="filter-3">
                            <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                            <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                            <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" in="shadowBlurOuter1" />
                        </filter>
                        <rect id="path-2" x="63" y="504" width="300" height="300" rx="40" />
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity=".9">
                        <g id="Desktop-HD" transform="translate(-39 -531)">
                            <g id="Hero" transform="translate(43 83)">
                                <g id="Rectangle-6" transform="rotate(45 213 654)">
                                    <use fill="#000" filter="url(#filter-3)" xlink:href="#path-2" />
                                    <use fill="url(#linearGradient-1)" xlink:href="#path-2" />
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="relative z-40 flex flex-col items-end justify-center w-full h-full lg:w-1/2 ms:pl-10">
                <div class="container relative left-0 w-full max-w-4xl lg:absolute xl:max-w-6xl lg:w-screen">
                    {{-- <img src="https://cdn.devdojo.com/images/september2020/macbook-mockup.png"
                    class="w-full h-auto mt-20 mb-20 ml-0 lg:mt-24 xl:mt-40 lg:mb-0 lg:h-full lg:-ml-12"> --}}
                    <img src="{{ asset('storage/img/laptop.png') }}" alt="hero">
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION END -->

    {{-- TOP PRODUCT SECTION --}}
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex flex-col items-center">
                <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Top Products</h2>
                <h3
                    class="w-full max-w-2xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                    Simple, Transparent Pricing for Everyone</h3>
            </div>
            <div class="mt-6">
                <x-swiper :products="$products"></x-swiper>
            </div>
        </div>
    </div>
    {{-- TOP PRODUCTS END --}}


    <!-- Start Testimonials -->
    <section class="">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex flex-col items-center">
                <h2 class="my-5 text-base font-medium tracking-tight text-indigo-500 uppercase">Our Top Products</h2>
                <h3
                    class="w-full max-w-2xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                    Simple, Transparent Pricing for Everyone</h3>
            </div>
            <div class="py-4 px-4"></div>
            <div class="mt-6 relative px-4">
                <x-swiper-review></x-swiper-review>
            </div>
        </div>
    </section>
    <!-- End Testimonials-->

</x-layout>
