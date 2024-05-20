
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MotionPathPlugin.min.js"></script>   
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="top-0 text-sm w-full fixed z-20 bg-gray-800  h-10 sell flex items-center">
        <div class="flex justify-between w-full px-10 sm:px-20 ">
            <a href="{{ route('dashboard.seller') }}">
                <p class="text-sm space-x-6 font-semibold text-white">Sell on Bili-Nao</p>
            </a>
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
    @extends('layout.navbar')
<div class="w-full h-full">
    <div class="max-w-6xl px-6 mx-auto mt-24">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 py-10  ">
            @foreach ($results as $result)
            <div class="bg-white rounded-lg shadow-md p-6">
                <img class="w-full h-48 object-cover mb-4" src="{{ asset('images/' . $result->product_image) }}" alt="{{ $result->title }} Image">
                <h3 class="text-lg font-semibold mb-2">{{ $result->title }}</h3>
                <p class="text-gray-700 mb-2">Price: &#8369;{{ $result->price }}</p>
                <form action="{{ url('addcart', $result->id) }}" method="POST">
                    @csrf
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Add to Cart</button>
                </form>
        @endforeach
        </div>
     </div>
        </div>
        <div class="flex justify-center h-screen">
            @if($results->isEmpty())
                <p><i class="fas fa-exclamation-circle text-red-500 mr-2"></i>No products found for "{{ $query }}".</p>
            @else
        </div>
</div>
@endif

</body>


</html>