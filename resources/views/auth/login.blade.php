<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: 'Inter';
        }
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);"
        }
    </style>
</head>
<body class="antialiased gradient">
<div class="relative min-h-screen flex items-top justify-center sm:items-center sm:pt-0">
    <div class="container mx-auto">
        <div class="flex items-center flex-col p-6 md:h-128 md:flex-row">
            <div class="md:w-1/2">
                <img src="{{ asset('img/undraw_online_transactions_02ka.svg') }}" alt="Logo" class="w-64 mb-6">
                <h3 class="text-2xl font-semibold text-gray-600">
                    Customer Credit and Payment System
                </h3>

                <p class="text-gray-600 mt-3">Please enter your login info to access system.</p>
            </div>

            <div class="md:w-1/2 flex md:justify-end md:mt-0">
                <div class="max-w-sm bg-white rounded-lg shadow">
                    <div class="p-5">
                        <h2 class="text-2xl font-semibold text-gray-600">Sign In</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mt-4">
                                <input class="w-full py-2 px-4 bg-gray-100 border border-gray-300 rounded @error('email') focus:border-red-400 focus:outline-none focus:shadow-outline-red @else focus:outline-none focus:bg-white @endif"
                                       id="email" name="email" required
                                       type="email" placeholder="Email address" aria-label="Email address" autofocus>
                                @error('email')
                                <span class="text-left text-xs text-red-600 dark:text-red-400">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <input class="w-full mt-4 py-2 px-4 bg-gray-100 border border-gray-300 rounded focus:outline-none focus:bg-white"
                                       type="password" placeholder="Password" id="password" name="password" required
                                       aria-label="Password">
                            </div>

                            <div class="mt-4 flex items-center justify-end">
                                {{--                                    <a href="#" class="text-gray-600 text-sm hover:underline">Forget Password?</a>--}}

                                <button type="submit" class="px-4 py-2 font-semibold bg-purple-600 rounded text-white hover:bg-purple-900">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="ml-6 text-left text-sm text-gray-500">
                App v 0.1 (&copy;2020 by Dev Geek)
            </div>
        </div>
    </div>
</div>
</body>
</html>
