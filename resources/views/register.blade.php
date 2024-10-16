<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @vite('resources/css/app.css')
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <x-authlayout />
    <div id="features" class="relative w-full px-4 py-2 md:py-3 lg:py-8
    xl:py-14 xl:px-0 my-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2 class="my-0 text-base font-medium tracking-tight text-indigo-500
            uppercase">Join Us
            </h2>
            <h3
                class="max-w-2xl px-5 mt-0 text-3xl font-black leading-tight
                text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
                Register
                to Store</h3>
        </div>
    </div>
    <section>

        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto
        md:my-10 lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0
                sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 ">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Register your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="/user/register">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-1 text-sm font-medium
                                text-gray-900 dark:text-white">Your
                                full name</label>
                            <input type="text" name="name" id="name"
                                class="border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John Doe" required="">
                            @error('name')
                                <div class="text-red-600 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="email"
                                class="block mb-1 text-sm font-medium
                                text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                            @error('email')
                                <div class="text-red-600 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="phone_number"
                                class="block mb-1 text-sm font-medium
                                text-gray-900 dark:text-white">Phone
                                Number</label>
                            <input type="text" name="phone_number" id="phone_number"
                                class="border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="08123456789" required="">
                            @error('phone_number')
                                <div class="text-red-600 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class=" border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <div class="text-red-600 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="confirm_password"
                                class="block mb-1 text-sm font-medium
                                text-gray-900 dark:text-white">Confirm
                                Passoword</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••"
                                class=" border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('confirm_password')
                                <div class="text-red-600 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600
                            hover:bg-primary-700 focus:ring-4 focus:outline-none
                            focus:ring-primary-300 font-medium rounded-lg
                            text-sm px-5 py-2.5 text-center dark:bg-primary-600
                            dark:hover:bg-primary-700
                            dark:focus:ring-primary-800">Register</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Do you have an account? <a href="/user/login"
                                class="font-medium text-primary-600
                                hover:underline dark:text-primary-500">Log
                                in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
