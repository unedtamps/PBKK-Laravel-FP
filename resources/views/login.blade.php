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

    @if (session('success'))
        <div id="success-message"
            class="alert alert-success bg-green-500 mt-10
text-center text-white text-sm md:text-lg max-w-xs md:max-w-md py-2 mx-auto rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->has('loginError'))
        <div id="error-message"
            class="bg-red-500 mt-10
text-center text-white text-sm md:text-lg max-w-xs md:max-w-md py-2 mx-auto rounded-lg">
            {{ $errors->first('loginError') }}
        </div>
    @endif

    </div>
    <x-authlayout />
    <div id="features" class="relative w-full px-4 py-2 md:py-3 lg:py-8
    xl:py-14 xl:px-0 my-0">
        <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
            <h2 class="my-0 text-base font-medium tracking-tight text-indigo-500
            uppercase">Explore More
            </h2>
            <h3
                class="max-w-2xl px-5 mt-0 text-3xl font-black leading-tight
                text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl">
                Log in to
                Store</h3>


        </div>
    </div>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto
        md:my-10 lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Log in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/user/login" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email"
                                class="border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class=" border border-gray-400 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600
                            hover:bg-primary-700 focus:ring-4 focus:outline-none
                            focus:ring-primary-300 font-medium rounded-lg
                            text-sm px-5 py-2.5 text-center dark:bg-primary-600
                            dark:hover:bg-primary-700
                            dark:focus:ring-primary-800">Log
                            in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="/user/register"
                                class="font-medium text-primary-600
                                hover:underline dark:text-primary-500">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000); // 5000ms = 5 seconds
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                setTimeout(() => {
                    errorMessage.style.display = 'none';
                }, 5000); // 5000ms = 5 seconds
            }
        });
    </script>

</body>

</html>
