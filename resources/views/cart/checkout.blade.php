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
        <title>Checkout</title>
    </head>
    <body>
        <main>
            <nav class="w-full h-20    border-bottom-1 border flex items-center justify-between  px-14">
                <a href="{{route('dashboard.user_dashboard')}}">
            <div class=" ">
                    <p class="text-6xl font-potta text-yellow-400">Bilinao</p>
            </div>
        </a>
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
            </nav> 
            <div class="flex flex-col sm:flex-row  ">
                <div id="checkout_form" class="w-full sm:w-1/2 rounded-tr-3xl rounded-br-3xl bg-white h-screen tracking-wide overflow-y-scroll">
                    <div class="px-6   py-10 m-10 ">
                        <p class="text-2xl text-gray-800  font-bold ">Complete Your Payment Details</p>
                    <form action="" class="mt-10 text-l text-gray-600 flex flex-col ">   
                        <label class="text-1xl text-gray-800 font-semibold " for="">Contact</label>
                    <div class="flex flex-row mt-3 mb-3 space-x-6 flex-shrink">
                        <input class="w-full border justify-center py-3  px-4 rounded-md " type="text" placeholder="Email"> 
                    </div>
                    <label class="text-1xl  text-gray-800 font-semibold " for="">Delivery</label>
                    <div class="flex flex-row mt-3 mb-3 space-x-6 flex-shrink">
                        <input class="w-full border justify-center py-3  px-4 rounded-md " type="text" placeholder="First Name">
                        <input class="w-full border justify-center py-3  px-4 rounded-md " type="text" placeholder="Last Name"> 
                    </div>
                    <input class="w-full border justify-center py-3  px-4 rounded-md mt-3 mb-3 " type="text" placeholder="Address"> 
                    <input class="w-full border justify-center py-3  px-4 rounded-md mt-3 mb-3" type="text" placeholder="Apartment,suite,etc. (optional)"> 
                    <div class="flex flex-row mt-3 mb-3 space-x-6 flex-shrink">
                        <input class="w-full border justify-center py-3  px-4 rounded-md " type="text" placeholder="Postal code">
                        <input class="w-full border justify-center py-3  px-4 rounded-md " type="text" placeholder="City"> 
                    </div>
                    <div class="  ">
                <select class="w-full py-3 px-4  border  justify-center rounded-md mt-3 mb-3 " placeholder="Region">
                    <option value="" disabled selected>Select Province</option>
                    <!-- A -->
                    <option value="Abra">Abra</option>
                    <option value="Agusan del Norte">Agusan del Norte</option>
                    <option value="Agusan del Sur">Agusan del Sur</option>
                    <option value="Aklan">Aklan</option>
                    <option value="Albay">Albay</option>
                    <option value="Antique">Antique</option>
                    <option value="Apayao">Apayao</option>
                    <option value="Aurora">Aurora</option>
                    <!-- B -->
                    <option value="Basilan">Basilan</option>
                    <option value="Bataan">Bataan</option>
                    <option value="Batanes">Batanes</option>
                    <option value="Batangas">Batangas</option>
                    <option value="Benguet">Benguet</option>
                    <option value="Biliran">Biliran</option>
                    <option value="Bohol">Bohol</option>
                    <option value="Bukidnon">Bukidnon</option>
                    <option value="Bulacan">Bulacan</option>
                    <!-- C -->
                    <option value="Cagayan">Cagayan</option>
                    <option value="Camarines Norte">Camarines Norte</option>
                    <option value="Camarines Sur">Camarines Sur</option>
                    <option value="Camiguin">Camiguin</option>
                    <option value="Capiz">Capiz</option>
                    <option value="Catanduanes">Catanduanes</option>
                    <option value="Cavite">Cavite</option>
                    <option value="Cebu">Cebu</option>
                    <option value="Compostela Valley">Compostela Valley</option>
                    <option value="Cotabato">Cotabato</option>
                    <!-- D -->
                    <option value="Davao de Oro">Davao de Oro</option>
                    <option value="Davao del Norte">Davao del Norte</option>
                    <option value="Davao del Sur">Davao del Sur</option>
                    <option value="Davao Occidental">Davao Occidental</option>
                    <option value="Davao Oriental">Davao Oriental</option>
                </select>
            </div>
            <input class="w-full border justify-center py-3  px-4 rounded-md mt-3 mb-3" type="text" placeholder="Phone"> 
            <div class="flex gap-2 items-center">
                <input type="checkbox">
                <span class="text-sm">Save this information for next time</span>
            </div>
            <div class="flex flex-col gap-2 items-start">
                <div class="flex items-center">
                    <input type="checkbox" id="paypal-checkbox">
                    <label for="paypal-checkbox" class="flex items-center cursor-pointer">
                        <img src="paypal_logo.png" alt="PayPal Logo" class="w-8 h-8 mr-2">
                        <span class="text-sm font-semibold">PayPal</span>
                    </label>
                </div>
                <p class="text-xs text-gray-500 ml-10">Secure and convenient online payments.</p>
                <div class="flex items-center">
                    <input type="checkbox" id="paymongo-checkbox">
                    <label for="paymongo-checkbox" class="flex items-center cursor-pointer">
                        <img src="paymongo_logo.png" alt="PayMongo Logo" class="w-8 h-8 mr-2">
                        <span class="text-sm font-semibold">PayMongo</span>
                    </label>
                </div>
                <p class="text-xs text-gray-500 ml-10">Fast and reliable payment processing.</p>
            </div>
        </form>  
                    </div>
                </div>
                <div class="w-full sm:w-1/2  h-screen bg-black">
                    <div class="px-14  py-10 text-white">
                        <div class="text-gray-300 flex items-center justify-between">
                            <p>Products</p>
                            <p>Total</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-18 h-18 rounded border flex items-center justify-center mr-4 mt-5 relative">
                                <div class="absolute w-6 h-6 bg-gray-100  opacity-40  -top-4 -right-2 border rounded-full full items-center justify-center" ><span class="text-black text-sm">9</span></div>
                                <img class="w-16 h-16"  src="/illustrations/home-decor.png" >
                            </div>
                            <div class=" text-sm w-24 h-24  flex flex-col items-start justify-center leading-6">
                                <p>Vase</p>
                                <p class="">&#8369;350</p>
                            </div>
                        </div>
                        <div class=" text-sm w-full flex items-center justify-between mt-5">
                            <p>Subtotal</p>
                            <p class="font-semibold">&#8369;350</p>
                        </div>
                        <div class="text-sm w-full flex items-center justify-between mt-2">
                            <p>Shipping</p>
                            <p class="">Enter shipping address</p>
                        </div>
                        <div class=" w-full flex items-center justify-between mt-2">
                            <p class="text-2xl  font-semibold">Total</p>
                            <p class="">PHP <span class="text-2xl font-semibold">&#8369;350</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @extends('layout.footer')
    </body>
    </html>