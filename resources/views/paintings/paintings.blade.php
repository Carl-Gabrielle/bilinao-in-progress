<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Paintings</title>
</head>
<body>
    <div class=" text-sm w-full fixed z-20 bg-gray-800  h-10 sell flex items-center">
        <div class="flex justify-between w-full px-10 sm:px-20 ">
            @if(auth()->check())
            <a href="{{ route('dashboard.seller') }}">
                <p class="text-sm space-x-6 font-semibold text-white">Sell on Bili-Nao</p>
            </a>
        @else
            <a href="{{ route('users.login') }}">
                <p class="text-sm space-x-6 font-semibold text-white">Sell on Bili-Nao</p>
            </a>
        @endif
        <div class="flex space-x-6 ">
            @unless(Auth::check())
            <div class="flex space-x-6 ">
                <a href="{{ route('users.login') }}">
                    <p class="text-l bg-yellow-400 px-4 rounded-3xl font-semibold text-slate-900">Login</p>
                </a>
                <a href="{{ route('users.signup') }}">
                    <p class="text-l font-semibold text-white">Signup</p>
                </a>
            </div>
        @endunless
        </div>
        </div>
    </div>
    @extends('layout.navbar')
</body>
</html>