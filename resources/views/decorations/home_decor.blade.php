<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
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
<div class="w-full pt-40 relative h-full px-5">
    <div class="max-w-6xl px-6 mx-auto">
        <div class="hidden sm:block bg-gray-50 w-2/3 sm:w-72 px-4 sm:px-6 py-3 sm:py-1 rounded-lg mb-10">
            <nav class="flex text-xs sm:text-base items-center " aria-label="Breadcrumb">
                <a href="{{route('dashboard.user_dashboard')}}">
                <svg width="18" height="18" fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 10v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V10"></path>
                    <path d="M9 21a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1"></path>
                    <path d="m3 12 2-2 7-7 7 7 2 2"></path>
                 </svg>
                </a>
                <span class="mx-2.5 text-gray-300">&gt;</span>
                <a href="#" class="text-gray-900">Home Decorations</a>
            </nav>
        </div>
        <div class=" gap-16 ">
            <div class="md:flex  md:items-center gap-12">
                <img class="w-full h-52 md:w-1/2 lg:h-80  mb-6 md:mb-0 " src="/illustrations/home-decor.png" alt="">
                <div class="md:w-1/2 md:pl-6 sm:px-0 px-2  ">
                    <p class="text-center sm:text-left font-extrabold text-3xl" style="color:#333">Home Decorations</p>
                    <p class=" pt-4  font-normal leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae harum repellendus nemo fugiat fuga non deserunt obcaecati minus architecto dolorem. Suscipit quaerat, ducimus adipisci quia excepturi molestias qui, odit inventore eum quod architecto obcaecati? Fugit, nisi? Consequuntur rerum quo omnis!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full h-full mt-20 bg-gray-100">
    <div class="max-w-6xl px-6 mx-auto  ">
        @if(session('success'))
        <div id="toast" class="fixed bottom-4 right-4 z-50">
            <div class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md flex items-center">
                <i class="fas fa-cart-plus fa-lg mr-2 text-white"></i>
                <span>{{ session('success') }}</span>
            </div>
        </div>
        @endif
        @if(session('error'))
        <div id="toast" class="fixed bottom-4 right-4 z-50">
            <div class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md flex items-center">
                <i class="fas fa-exclamation-triangle fa-lg mr-2 text-white"></i>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif
    <div class="flex justify-between items-center pt-16">
        <div class="flex gap-6 font-light">
            <span>Filter:</span>
            <div class="relative">
                <p id="availabilityClick" class="hover:bg-gray-200 px-3 rounded-md  cursor-pointer">Availability <i class="fas fa-chevron-down text-sm font-light ml-2"></i></p>
                <div id="availabilityDropdown" class="z-10 absolute top-full mt-2 w-72 sm:w-96 bg-white rounded-2xl shadow-lg hidden">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class="text-gray-800 font-semibold">Filter by Availability</p>
                            <p class="cursor-pointer text-gray-500 hover:text-gray-900">Reset</p>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="instock" class="cursor-pointer">
                                <label for="instock" class="cursor-pointer ml-2 text-gray-600">In Stock (4)</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" id="outstock" class="cursor-pointer">
                                <label for="outstock" class="cursor-pointer ml-2 text-gray-600">Out of Stock (4)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <p id="priceClick" class=" hidden sm:block hover:bg-gray-200 px-3 rounded-md cursor-pointer">Price <i class="fas fa-chevron-down text-sm  ml-2 font-light "></i></p>
                <div id="priceDropdown" class="z-10 absolute top-full mt-2 h-auto w-96 bg-white rounded-2xl shadow-lg hidden">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-center mb-4">
                            <p class=" text-gray-800 font-semibold">Filter by Price</p>
                            <p class="cursor-pointer text-gray-500 hover:text-gray-900">Reset</p>
                        </div>
                        <div class="flex flex-col space-y-4">
                            <label for="priceFrom" class="text-gray-600">Price From:</label>
                            <input type="text" id="priceFrom" name="priceFrom" placeholder="&#8369;0" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-500 transition duration-300">
                            <label for="priceTo" class="text-gray-600">Price To:</label>
                            <input type="text" id="priceTo" name="priceTo" placeholder="&#8369;350" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-gray-500 transition duration-300">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="flex gap-6">
            <div class="relative hidden sm:block font-light">
                <p class="hover:bg-gray-200 px-3  rounded-lg cursor-pointer" id="sortDropdownToggle">Sort by: Best selling <i class="fas fa-chevron-down font-light ml-1"></i></p>
                <div class="z-10 absolute top-full left-0 w-40 bg-white border border-gray-200 shadow-lg rounded-lg hidden" id="sortDropdown">
                    <a href="#" class="block px-4 py-3 hover:bg-gray-100">Best Selling</a>
                    <a href="#" class="block px-4 py-3 hover:bg-gray-100">Price: Low to High</a>
                    <a href="#" class="block px-4 py-3 hover:bg-gray-100">Price: High to Low</a>
                </div>
            </div>
            <span class="font-light">{{ $homeDecorationsCount }} product{{ $homeDecorationsCount != 1 ? 's' : '' }}</span>

        </div>
    </div>
    {{-- <div class="pt-11 grid grid-cols-2 pb-6 md:grid-cols-3  lg:grid-cols-4 gap-5 ml-5 mr-5">
        @foreach ($homeDecorationsProducts as $product)
            <div  class="relative px-2 sm:px-0 flex flex-col justify-between cursor-pointer bg-white sm:p-4 p-0 shadow-md rounded-3xl hover:-translate-y-1 hover:scale-105 transition duration-300 ease-in-out ">
                <div class="svg-container">
                    <svg class="svg1 absolute right-4 sm:right-8" width="22" height="22" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.343 7.778a4.5 4.5 0 0 1 7.339-1.46L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 20.364l-7.682-7.682a4.501 4.501 0 0 1-.975-4.904Z"></path>
                    </svg>
                    <svg class="svg2 absolute right-8" width="22" height="22" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path fill-rule="evenodd" d="M3.806 6.206a4.8 4.8 0 0 1 6.788 0L12 7.612l1.406-1.406a4.8 4.8 0 1 1 6.788 6.788L12 21.188l-8.194-8.194a4.8 4.8 0 0 1 0-6.788Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <a href="{{ route('productDetails.details', $product->id) }}" class="block">
                    <img class="object-cover mx-auto w-48 h-48 pt-10" src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->title }}">
                    <div class="flex flex-col justify-center items-center">
                        <p class="text-center text-gray-700 mt-4 font-semibold">{{ $product->title }}</p>
                        <h2 class="text-lg font-semibold text-center text-gray-900 mt-2">&#8369;{{ $product->price }}</h2>
                        <form action="{{ url('addcart', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full sm:w-auto border-2 border-slate-900 text-slate-900 font-semibold px-6 rounded-full mt-4">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                    <div class="circle-tooltip"></div> 
                </a>
            </div>
        @endforeach 
    </div> --}}
    <div class="pt-11 grid grid-cols-2 pb-6 md:grid-cols-3 lg:grid-cols-4 gap-5 ml-5 mr-5">
        @foreach ($homeDecorationsProducts as $product)
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
    
    
    <!-- Modal for displaying product details -->
    <div id="product-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg p-6 max-w-lg mx-auto">
            <div class="flex justify-end">
                <button id="close-modal" class="text-gray-600">&times;</button>
            </div>
            <div class="text-center">
                <img id="modal-image" class="mx-auto w-48 h-48" src="" alt="">
                <h2 id="modal-title" class="text-xl font-semibold mt-4"></h2>
                <p id="modal-description" class="text-gray-700 mt-2"></p>
                <h2 id="modal-price" class="text-lg font-semibold text-gray-900 mt-2"></h2>
            </div>
        </div>
    </div>
    
    
    
</div>
</div>
@extends('layout.footer')
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    
      document.addEventListener('DOMContentLoaded', () => {
        const productItems = document.querySelectorAll('.product-item');
        const modal = document.getElementById('product-modal');
        const modalImage = document.getElementById('modal-image');
        const modalTitle = document.getElementById('modal-title');
        const modalDescription = document.getElementById('modal-description');
        const modalPrice = document.getElementById('modal-price');
        const closeModal = document.getElementById('close-modal');

        productItems.forEach(item => {
            item.addEventListener('click', (event) => {
                if (event.target.closest('button') && event.target.closest('button').classList.contains('add-to-cart-button')) {
                    return; 
                }
                const title = item.getAttribute('data-title');
                const description = item.getAttribute('data-description');
                const image = item.getAttribute('data-image');
                const price = item.getAttribute('data-price');
                modalTitle.textContent = title;
                modalDescription.textContent = description;
                modalImage.src = image;
                modalImage.alt = title;
                modalPrice.innerHTML = `&#8369;${price}`;
                modal.classList.remove('hidden');
            });
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });
 setTimeout(() => {
        document.getElementById('toast').classList.add('hidden');
    }, 3000); 
$(document).ready(function() {
    $('#sortDropdownToggle').click(function(event) {
        event.preventDefault(); 
        $('#availabilityDropdown').slideUp('fast');
        $('#priceDropdown').slideUp('fast');
        $('#sortDropdown').slideToggle('fast');
    });
    $('#availabilityClick').click(function(event) {
        event.preventDefault(); 
        $('#sortDropdown').slideUp('fast');
        $('#priceDropdown').slideUp('fast');
        $('#availabilityDropdown').slideToggle('fast');
    });
    $('#priceClick').click(function(event) {
        event.preventDefault(); 
        $('#sortDropdown').slideUp('fast');
        $('#availabilityDropdown').slideUp('fast');
        $('#priceDropdown').slideToggle('fast');
    });
    $(document).click(function(event){
        if (!$(event.target).closest('#availabilityClick,#availabilityDropdown').length){
            $('#availabilityDropdown').slideUp('fast');
        }
        if (!$(event.target).closest('#priceClick,#priceDropdown').length){
            $('#priceDropdown').slideUp('fast');
        }
        if (!$(event.target).closest('#sortDropdownToggle,#sortDropdown').length){
            $('#sortDropdown').slideUp('fast');
        }
    })
});



document.querySelectorAll('.svg-container').forEach(container => {
    const svg1 = container.querySelector('.svg1');
    const svg2 = container.querySelector('.svg2');

    svg1.addEventListener('click', function() {
        svg1.style.display = 'none';
        svg2.style.display = 'inline-block';
    });

    svg2.addEventListener('click', function() {
        svg1.style.display = 'inline-block';
        svg2.style.display = 'none';
    });
});

</script>

</html>