<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Custom CSS for mobile menu */
        .mobile-menu {
            display: none;
        }
        .mobile-menu.open {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="bg-gray-800 shadow-md fixed top-0 w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-white text-lg font-semibold">Logo</a>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Shop</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Categories</a>
                    </div>
                </div>
                <div >
                 <input class="sm:w-auto w-full" type="text" placeholder="Search Product">
                </div>
                
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 hidden sm:flex sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View Cart</span>
                        <svg  width="22" height="22" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.586 17.586a2 2 0 1 1 2.828 2.828 2 2 0 0 1-2.828-2.828Z"></path>
                            <path d="M8.414 20.414a2 2 0 1 0-2.828-2.828 2 2 0 0 0 2.828 2.828Z"></path>
                            <path d="m7 13-2.293 2.293c-.63.63-.184 1.707.707 1.707H17"></path>
                            <path d="M5.4 5H21l-4 8H7L5.4 5Z"></path>
                            <path d="M3 3h2l.4 2"></path>
                         </svg>
                         <div class="absolute -top-2 -right-2 w-5 h-5 flex items-center justify-center bg-red-500 text-white rounded-full text-xs">9</div>
                    </button>
            
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button id="user-menu-button" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                    </div>
            </div>
            <div class="flex md:hidden items-center">
                <button id="mobile-menu-button" type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white">
                    <!-- Heroicon name: menu -->
                    <svg  class="  h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <div id="user-mobile" class="user-list absolute right-5 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" tabindex="-1" style="display: none;">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
        </div>
        <div id="mobile-menu" class="mobile-menu md:hidden absolute left-1/2 transform -translate-x-1/2 z-10 mt-2 w-72 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" style="display: none;">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Home</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">About Us</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Shop</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Categories</a>
            </div>
        </div>
            
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#user-menu-button').click(function(event) {
        event.stopPropagation();
        $('#user-mobile').slideToggle('fast'); 
    });
    $(document).click(function(event) {
        if (!$(event.target).closest('#user-menu-button, #user-mobile').length) {
            $('#user-mobile').slideUp('fast'); 
        }
    });
});
$(document).ready(function() {
    $('#mobile-menu-button').click(function(event) {
        event.stopPropagation();
        $('#mobile-menu').slideToggle('fast'); 
    });

    $(document).click(function(event) {
        if ($(window).width() <= 768) {
            if (!$(event.target).closest('#mobile-menu-button, #mobile-menu').length) {
                $('#mobile-menu').slideUp('fast'); 
            }
        } else {
            $('#mobile-menu').slideUp('fast'); 
        }
    });

    $(window).resize(function() {
        if ($(window).width() > 768) {
            $('#mobile-menu').slideUp('fast'); 
        }
    });
});

        
    </script>
</body>
</html>
