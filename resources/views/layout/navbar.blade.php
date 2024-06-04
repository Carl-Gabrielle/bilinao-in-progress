{{-- @include('layout') --}}
    <nav class="bg-gray-800 container-lg container_nav shadow-md fixed top-9 w-full z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:px-6 px-0 ">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{route('dashboard.user_dashboard')}}" class="text-gray-800 text-lg font-semibold">LOGO</a>
                </div>
                <div class="hidden md:none lg:block">
                    <div class="flex items-center space-x-4">
                        <a href="{{route('dashboard.user_dashboard')}}" class="text-gray-800 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Shop</a>
                        <a id="category_menu" class="flex items-center text-gray-800 hover:bg-gray-900 hover:text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer" >Category
                            <i class="fas fa-chevron-down text-sm font-bold ml-2 hover:text-white"></i>
                        </a>
                    </div>
                </div>
                <form id="searchForm" action="{{ route('search') }}" method="GET">
                    <div class="relative flex items-center justify-center">
                        <input id="searchInput" name="query" class="sm:w-auto w-full border-2 border-gray-700 focus:border-gray-900 rounded-3xl px-6 py-1 pl-10 bg-transparent placeholder-gray-900" type="text" placeholder="Search Product">
                        <button type="submit" class="absolute right-2 top-1  mr-2 mt-1 mb-1">
                            <i class="fas fa-search"></i> 
                        </button>
                    </div>
                </form>
                <div class="absolute inset-y-0 right-0  items-center pr-2 hidden flex  sm:flex sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @guest
                    <a href="{{ route('users.login') }}">
                        <p class="text-l  px-4 rounded-3xl font-semibold text-slate-900 mr-5">Login</p>
                    </a>
                    <a href="{{ route('users.signup') }}">
                        <p class="text-l font-semibold  bg-gray-800 text-white px-6 py-1 rounded-full">Signup</p>
                    </a>
                @else
                    <!-- Your cart button for authenticated users -->
                    <button id="cart-btn" type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View Cart</span>
                        <svg  width="22" height="22" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.586 17.586a2 2 0 1 1 2.828 2.828 2 2 0 0 1-2.828-2.828Z"></path>
                            <path d="M8.414 20.414a2 2 0 1 0-2.828-2.828 2 2 0 0 0 2.828 2.828Z"></path>
                            <path d="m7 13-2.293 2.293c-.63.63-.184 1.707.707 1.707H17"></path>
                            <path d="M5.4 5H21l-4 8H7L5.4 5Z"></path>
                            <path d="M3 3h2l.4 2"></path>
                        </svg>
                        @if(isset($cartItemCount) && $cartItemCount > 0)
                <div class="absolute -top-2 -right-2 w-5 h-5 flex items-center justify-center bg-red-500 text-white rounded-full text-xs">
                    {{ $cartItemCount }}
                </div>
            @endif
                    </button>
                @endguest
                
                    @if(Auth::check())
                    <div  id="user-menu-button" class="relative ml-3 cursor-pointer  hover:bg-gray-100 rounded-lg px-4 py-1">
                        <div class="flex items-center gap-2">
                            <button  type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="/illustrations/TikTok Profile Picture Ideas.jpg" alt="">
                            </button>
                            <p>Hi, <span class="text-slate-900 font-semibold">{{ ucfirst(Auth::user()->name) }} <i class="fas fa-chevron-down text-sm font-bold ml-1"></i>  </span></p>
                            
                        </div>
                    </div>
                    @endif 
            </div>
            <div class="flex lg:hidden items-center">
                <button id="mobile-menu-button" type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white">
                    <svg class="text-gray-900 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        
        </div>
        
        <div id="category_list" class="  hidden absolute left-0 sm:left-0 md:left-48 top-20 border border-gray-300 w-full sm:w-full md:w-2/3 h-auto  bg-white rounded-lg">
            <div class="container mx-auto  px-6 py-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <a href="/homedecor/homedecor.html">
                        <div class="border border-gray-300 bg-white p-4 h-28 rounded-lg">
                            <h2 class="text-l font-semibold mb-2">Home Decorations</h2>
                            <p>Content for Home Decorations.</p>
                        </div>
                    </a>
                    <a href="">
                    <div class="border border-gray-300 h-28 bg-white p-4 rounded-lg">
                        <h2 class="text-l font-semibold mb-2">Tie Dye Shirts</h2>
                        <p>Content for Tie Dye Shirts.</p>
                    </div>
                </a>
                <a href="">
                    <div class="border border-gray-300  h-28 bg-white p-4 rounded-lg">
                        <h2 class="text-l font-semibold mb-2">Handmade Bags</h2>
                        <p>Content for Column 3.</p>
                    </div>
                </a>
                <a href="">
                    <div class="border border-gray-300  h-28 bg-white p-4 rounded-lg ">
                        <h2 class="text-l font-semibold mb-2">Accessories</h2>
                        <p>Content for Column 4.</p>
                    </div>
                </a>
                <a href="">
                    <div class="border border-gray-300  h-28 bg-white p-4 rounded-lg ">
                        <h2 class="text-l font-semibold mb-2">Paintings</h2>
                        <p>Content for Column 5.</p>
                    </div>
                </a>
                <a href="">
                    <div class="border border-gray-300  h-28 bg-white p-4 rounded-lg ">
                        <h2 class="text-l font-semibold mb-2">Handmade Mats</h2>
                        <p>Content for Column 6.</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
        {{-- <div class="relative left-8 sm:left-0">
            <div id="cart-list" class="fixed hidden overflow-y-scroll  right-5 sm:right-0 z-10 mt-2 w-96 origin-top-right rounded-md bg-white py-8 px-6 shadow-lg border border-gray-200">
                <div class="flex justify-between items-center mb-4">
                    <p class="text-2xl text-gray-900">Your Cart <span class="bg-red-500 px-6  text-white rounded-lg">9</span></p>
                    <svg id="cart-close" class="cursor-pointer" width="26" height="26" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.152 5.152a1.2 1.2 0 0 1 1.696 0L12 10.303l5.152-5.151a1.2 1.2 0 1 1 1.696 1.696L13.697 12l5.151 5.152a1.2 1.2 0 0 1-1.696 1.696L12 13.697l-5.152 5.151a1.2 1.2 0 0 1-1.696-1.696L10.303 12 5.152 6.848a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class=" flex justify-between items-center mb-4">
                    <p class="text-gray-400">Product</p>
                    <p class="text-gray-400">Total</p>
                </div>
                <hr class="border-gray-200 mb-4">
                <div class="flex items-center mb-4">
                    <div class="w-24 h-24 rounded border-2 flex items-center justify-center mr-4">
                        <img class="w-16 h-16" src="/illustrations/bag.png" alt="">
                    </div>
                    <div>
                        <p class="text-sm ">Handmade Buri Bag</p>
                        <p class="text-sm text-gray-400 py-2">&#8369;350</p>
                        <div class="flex items-center justify-between border border-gray-300 rounded h-11 w-24 relative">
                            <button class="px-3 py-1 border-r border-gray-300 focus:outline-none" aria-label="Decrease quantity">-</button>
                            <span class="px-3">1</span>
                            <button class="px-3 py-1 border-l border-gray-300 focus:outline-none" aria-label="Increase quantity">+</button>
                            <iconify-icon class="absolute  -right-8 bottom-3 cursor-pointer" data-icon="bi:trash-fill" data-inline="false" style="font-size: 1.3rem;"></iconify-icon>
                        </div>
                    </div>
                    
                    <div class=" h-24  ml-8">
                        <p class="text-sm text-gray-400 ">&#8369;350</p>
                    </div>
                </div>
                
                <hr class="border-gray-200 mt-44">
                <div class="flex items-center justify-between">
                    <p>Subtotal</p>
                    <p class="text-sm text-gray-400 py-2">&#8369;350</p>
                </div>
                <div >
                    <p class="text-gray-400 text-xs pb-2">Taxes and shipping calculated at checkout</p>
                </div>
                <button class="w-full bg-yellow-300 py-2 text-white rounded-2xl" style="background-color: orangered;">Checkout</button>
            </div>
        </div> --}}
        <div class="relative left-8 sm:left-0">
            <div id="cart-list" class="hidden fixed overflow-y-scroll right-5 sm:right-0 z-10 mt-2 w-96 origin-top-right h-96 rounded-md bg-white py-8 px-6 shadow-lg border border-gray-200">
              
            </div>
        </div>
        <div id="user-mobile" class=" user-list absolute right-5 z-10 mt-2   w-96 h-100 origin-top-right rounded-md bg-white px-4  py-2  shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" tabindex="-1" style="display:none" >
        <div class=" py-10  px-6">
            <h3 class="text-2xl ">User Profile</h3>
            <div class="py-2 flex items-center gap-4">
                <img class="h-24 w-24 rounded-full object-cover" src="/illustrations/TikTok Profile Picture Ideas.jpg" alt="">
                <div>
                @if(Auth::check())
                    <h2 class="text-2xl">{{ ucfirst(Auth::user()->name) }}</h2>
                    <p class="text-sm"><i class="fas fa-envelope text-gray-400 pr-1"></i> {{ Auth::user()->email }}</p>
                @endif 
                </div>
            </div>
            <hr class="mt-4">
            <div class="py-2 mt-4 cursor-pointer rounded-lg px-6 flex items-center gap-6 w-full hover:bg-gray-100">
                <svg width="26" height="26" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.675 4.317c-.426-1.756-2.924-1.756-3.35 0a1.723 1.723 0 0 1-2.572 1.065c-1.544-.94-3.31.827-2.37 2.37a1.724 1.724 0 0 1-1.066 2.573c-1.756.426-1.756 2.924 0 3.35a1.725 1.725 0 0 1 1.065 2.572c-.94 1.544.827 3.31 2.37 2.37a1.724 1.724 0 0 1 2.573 1.066c.426 1.756 2.924 1.756 3.35 0a1.725 1.725 0 0 1 2.572-1.065c1.544.94 3.31-.827 2.37-2.37a1.725 1.725 0 0 1 1.066-2.573c1.756-.426 1.756-2.924 0-3.35a1.724 1.724 0 0 1-1.065-2.572c.94-1.544-.827-3.31-2.37-2.37a1.724 1.724 0 0 1-2.573-1.066Z"></path>
                    <path d="M14.121 14.121A3 3 0 1 0 9.88 9.88a3 3 0 0 0 4.242 4.242Z"></path>
                </svg>
                <div>
                    <h1>My Profile</h1>
                    <h5 class="text-gray-400">Account Settings</h5>
                </div>
            </div> 
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-white  " 
    role="menuitem" tabindex="-1" 
    id="user-menu-item-2">
            <div class=" cursor-pointer bg-gray-800 mb-10 rounded-lg mt-10 flex py-3 items-center justify-center w-full">
                Logout
            </div>
        </a>
        </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

        </div>
        <div id="mobile-menu" class="mobile-menu md:hidden absolute left-1/2 transform -translate-x-1/2 z-10 mt-2 w-96 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded" role="menuitem" tabindex="-1" id="user-menu-item-0">Home</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded" role="menuitem" tabindex="-1" id="user-menu-item-1">About Us</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded" role="menuitem" tabindex="-1" id="user-menu-item-2">Shop</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded" role="menuitem" tabindex="-1" id="user-menu-item-2">Categories</a>
            </div>
        </div>
    </nav>  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        fetch('/cart-content')
            .then(response => response.text())
            .then(html => {
                document.getElementById('cart-list').innerHTML = html;

                $('#cart-close').click(function(event) {
                    event.stopPropagation();
                    $('#cart-list').slideUp('fast');
                });
            });
    });


document.getElementById('searchForm').addEventListener('submit', function(event) {
        var query = document.getElementById('searchInput').value.trim();
        if (query === '') {
            event.preventDefault();
        }
    });
    $(document).ready(function() {
    $('#user-menu-button').click(function(event) {
    event.stopPropagation();
    $('#user-mobile').slideToggle('fast');
    $('#cart-list').slideUp('fast');
    $('#mobile-menu').slideUp('fast');
    $('#category_list').slideUp('fast');
    });
    $('#category_menu').click(function(event) {
    event.stopPropagation();
    $('#category_list').slideToggle('fast');
    $('#cart-list').slideUp('fast');
    $('#mobile-menu').slideUp('fast');
    });
    $('#cart-btn').click(function(event) {
    event.stopPropagation();
    $('#cart-list').slideToggle('fast');
    $('#user-mobile').slideUp('fast');
    $('#mobile-menu').slideUp('fast');
    $('#category_list').slideUp('fast');
    });

    $('#mobile-menu-button').click(function(event) {
    event.stopPropagation();
    $('#mobile-menu').slideToggle('fast');
    $('#user-mobile').slideUp('fast');
    $('#cart-list').slideUp('fast');
    });

    $(document).click(function(event) {
    if (!$(event.target).closest('#user-menu-button, #user-mobile').length) {
    $('#user-mobile').slideUp('fast');
    }
    if (!$(event.target).closest('#cart-btn, #cart-list').length) {
    $('#cart-list').slideUp('fast');
    }
    if (!$(event.target).closest('#mobile-menu-button, #mobile-menu').length) {
    $('#mobile-menu').slideUp('fast');
    }
    if (!$(event.target).closest('#category_menu, #category_list').length) {
    $('#category_list').slideUp('fast');
    }
    });

    $(window).resize(function() {
    if ($(window).width() > 768) {
    $('#mobile-menu').slideUp('fast');
    }
    });
    });

        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>