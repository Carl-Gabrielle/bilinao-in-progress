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
    <title>Tie Dye</title>
</head>
<body>
    <div class=" text-sm w-full fixed z-20 bg-gray-800  h-10 sell flex items-center">
        <div class="flex justify-between w-full px-10 sm:px-20 ">
            <a href="{{ route('dashboard.seller') }}">
                <p class="text-sm space-x-6 font-semibold text-white">Sell on Bili-Nao</p>
            </a>
            @unless(Auth::check())
            {{-- <div class="flex space-x-6 ">
                <a href="{{ route('users.login') }}">
                    <p class="text-l bg-yellow-400 px-4 rounded-3xl font-semibold text-slate-900">Login</p>
                </a>
                <a href="{{ route('users.signup') }}">
                    <p class="text-l font-semibold text-white">Signup</p>
                </a>
            </div> --}}
        @endunless
        </div>
    </div>
    @extends('layout.navbar')
    
    <div class="pt-11 grid grid-cols-2 pb-6 md:grid-cols-3 lg:grid-cols-4 gap-5 ml-5 mr-5">
        @foreach ($tieDyeProducts as $product)
            <div class="product-item relative px-2 sm:px-0 flex flex-col justify-between cursor-pointer bg-white sm:p-4 p-0 shadow-md rounded-3xl hover:-translate-y-1 hover:scale-105 transition duration-300 ease-in-out" data-id="{{ $product->id }}" data-title="{{ $product->title }}" data-description="{{ $product->description }}" data-image="{{ asset('images/' . $product->product_image) }}" data-price="{{ $product->price }}">
                <div class="svg-container">
                    <svg class="svg1 absolute right-4 sm:right-8" width="22" height="22" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.343 7.778a4.5 4.5 0 0 1 7.339-1.46L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.364l-7.682-7.682a4.501 4.501 0 0 1-.975-4.904Z"></path>
                    </svg>
                    <svg class="svg2 absolute right-8" width="22" height="22" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path fill-rule="evenodd" d="M3.806 6.206a4.8 4.8 0 0 1 6.788 0L12 7.612l1.406-1.406a4.8 4.8 0 1 1 6.788 6.788L12 21.188l-8.194-8.194a4.8 4.8 0 0 1 0-6.788Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <img class="object-cover mx-auto w-48 h-48 pt-10" src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->title }}">
                <div class="flex flex-col justify-center items-center">
                    <p class="text-center text-gray-700 mt-4 font-semibold">{{ $product->title }}</p>
                    <h2 class="text-lg font-semibold text-center text-gray-900 mt-2">&#8369;{{ $product->price }}</h2>
                    <form action="{{ url('addcart', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="add-to-cart-button w-full sm:w-auto border-2 border-slate-900 text-slate-900 font-semibold px-6 rounded-full mt-4">
                            Add to Cart
                        </button>
                    </form>
                </div>
                <div class="circle-tooltip"></div> 
            </div>
        @endforeach 
    </div>
    
</body>
</html>