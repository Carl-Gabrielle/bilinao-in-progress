<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class=" text-sm w-full fixed z-20 bg-gray-800  h-10 sell flex items-center">
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
<div class="w-full h-full landing " >
<div class=" relative flex flex-col  h-screen items-center justify-center text-center  px-3  ">
        <p class="text-6xl pt-32 tracking-wider z-10  sm:text-9xl uppercase text-gray-900">Explore local  <span class="text-yellow-400 font-potta animate-pulse">crafts</span>   </p>
        <div class="flex items-center justify-center h-12 w-12 p-11 rounded-full border-2 border-gray-900 mt-1 z-10">
            <p class="text-gray-800 font-bold ">See more</p>
        </div>
</div>
</div>
<div class=" w-full h-full rounded-t-3xl bg-gray-100">
    <div class="max-w-6xl px-6 mx-auto p-14"  style="background-image: url('/illustrations/bg_frame.png'); background-size: 100%; background-position: center; background-repeat: no-repeat;">
        <p class="text-2xl text-center  md:text-3xl  lg:text-5xl uppercase  font-extrabold text-gray-800">Shop our  <span class="bg-yellow-200 px-4 rounded-tr-3xl rounded-bl-3xl">Categories</span>  </p>
        <div class="grid  md:grid-cols-1 lg:grid-cols-2 gap-10 md:mt-20 mt-20">
            <div   class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700" style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1   font-extrabold text-3xl    lg:text-4xl ">Home Decorations</p>
                    <img class="w-32 h-32 pr-2 md:w-54 md:h-80 lg:w-56 lg:h-56 mt-4 z-10 " src="/illustrations/home-decor.png" alt="Home Decor Illustration">
                </div>
                <a href="{{route('decorations.home_decor')}}">
                    <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                        <span class="mr-2">View Products</span>
                        <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </a>
            </div>
            <div class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700"style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1  left-0 font-extrabold  text-3xl   lg:text-4xl ">Tie Dye Shirts</p>
                    <img class="w-36 h-36 md:w-52 md:h-52   lg:w-56 lg:h-56 mt-4 z-10" src="/illustrations/tieDye.png" alt="Tie Dye Illustration">
                </div>
                <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                    <span class="mr-2">View Products</span>
                    <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700"style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1   font-extrabold text-3xl   lg:text-4xl ">Hand Made Bags</p>
                    <img class="w-32 h-32 md:w-48 md:h-48   lg:w-52 lg:h-52 mt-4 z-10" src="/illustrations/bag.png" alt="Home Decor Illustration">
                </div>
                <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                    <span class="mr-2">View Products</span>
                    <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700"style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1  left-0 font-extrabold text-3xl   lg:text-4xl ">Accessories</p>
                    <img class="w-36 h-36 md:w-52 md:h-52   lg:w-56 lg:h-56 mt-4 z-10" src="/illustrations/accesories.png" alt="Home Decor Illustration">
                </div>
                <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                    <span class="mr-2">View Products</span>
                    <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700"style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1   font-extrabold text-3xl  lg:text-4xl ">Paintings</p>
                    <img class="w-52 h-52 md:w-60 md:h-80   lg:w-56 lg:h-80 mt-4 z-10" src="/illustrations/painting.png" alt="Home Decor Illustration">
                </div>
                <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                    <span class="mr-2">View Products</span>
                    <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="relative rounded-3xl bg-white w-full h-72 overflow-hidden transition-transform transform-gpu hover:scale-110 duration-700"style="background-color: rgba(255, 255, 255, 0.8);backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(8px);">
                <div  class=" inset-0  absolute   flex items-center justify-center">
                    <p class="text-gray-800 px-6 py-1   font-extrabold text-3xl   lg:text-4xl ">Hand Made Mats</p>
                    <img class="w-32 h-32 pr-2  md:w-60 md:h-60   lg:w-56 lg:h-60 mt-4 z-10" src="/illustrations/mats.png" alt="Home Decor Illustration">
                </div>
                <button class="absolute inline-flex bottom-0 m-8 px-6 py-2 rounded-lg text-white bg-gray-800">
                    <span class="mr-2">View Products</span>
                    <svg width="24" height="24" fill="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.752 6.352a1.2 1.2 0 0 1 1.696 0l4.8 4.8a1.2 1.2 0 0 1 0 1.696l-4.8 4.8a1.2 1.2 0 0 1-1.696-1.696l2.751-2.752H3.6a1.2 1.2 0 1 1 0-2.4h13.903l-2.751-2.752a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            </div>
            
        </div>
    </div>
    <div class="w-full h-full mt-10">
        <div class="max-w-6xl px-6 mx-auto p-14">
            <h2 class="lg:text-5xl md:text-5xl text-3xl  text-center md:text-left lg:text-left font-semibold text-gray-900 mb-10">Discover Our Collection</h2>
        
        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="/illustrations/mats.png" alt="Product 1" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Tie Dye Shirts</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-gray-800"></span>
                <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Add to Cart</button>
                </div>
            </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/illustrations/mats.png" alt="Product 1" class="w-full h-64 object-cover">
                <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Product Name</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$99.99</span>
                    <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Add to Cart</button>
                </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/illustrations/mats.png" alt="Product 1" class="w-full h-64 object-cover">
                <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Product Name</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$99.99</span>
                    <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Add to Cart</button>
                </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/illustrations/mats.png" alt="Product 1" class="w-full h-64 object-cover">
                <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Product Name</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$99.99</span>
                    <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Add to Cart</button>
                </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="/illustrations/mats.png" alt="Product 1" class="w-full h-64 object-cover">
                <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Product Name</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-gray-800">$99.99</span>
                    <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">Add to Cart</button>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @extends('layout.footer')
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script src="/js/gsap.js"></script>
<script src="/js/script.js"></script>
</html>
