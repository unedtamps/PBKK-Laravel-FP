<nav id="nav"
    class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
    <a href="/"
        class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
    <a href="/products"
        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Product</a>
    <a href="/testimonials" class="font-bold duration-100 transition-color hover:text-indigo-600">Testimonials</a>
    @if (Auth::check())
        <a href="/transaction"><i
                class='relative z-40 px-3 py-2 mr-0 text-2xl font-bold
                            md:hidden text-pink-500 md:px-5 lg:text-white sm:mr-3
                            md:mt-0 bx bx-cart'></i></a>
        <form action="/user/logout" method="POST">
            @csrf
            <button type="submit"><i
                    class='relative z-40 px-3 py-2 mr-0 text-2xl font-bold
                            md:hidden text-pink-500 md:px-5 lg:text-white sm:mr-3
                            md:mt-0 bx bx-log-out'></i></button>
        </form>
    @else
        <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
            <a href="/user/login" class="w-full py-2 font-bold text-center text-pink-500">Login</a>
            <a href="/user/register"
                class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">Register</a>
        </div>
    @endif
</nav>

<div
    class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
    @if (Auth::check())
        <a href="/transaction"><i
                class='relative z-40 px-3 py-2 mr-0 text-2xl font-bold
                text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0 bx bx-cart'></i></a>
        <form action="/user/logout" method="POST">
            @csrf
            <button type="submit"><i
                    class='relative z-40 px-3 py-2 mr-0 text-2xl font-bold
                text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0 bx
                bx-log-out'></i></button>
        </form>
    @else
        <a href="/user/login"
            class="relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0">Login</a>
        <a href="/user/register"
            class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">Register</a>
    @endif
</div>

<div id="nav-mobile-btn"
    class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
    <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
    <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
</div>
