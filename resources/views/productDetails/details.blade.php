    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Details</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @vite('resources/css/app.css')
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MotionPathPlugin.min.js"></script>   
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <style>
        /* 1F2937 */
        .desc-Btn.active, .reviews-Btn.active {
            background-color: rgb(209 250 229);
        color: rgb(5 150 105);
    }
    </style>
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
                <a href="{{route('users.login')}}"> <p class="text-l bg-yellow-400 px-4 rounded-3xl font-semibold text-slate-900">Login</p></a>
                <a href="{{route('users.signup')}}"> <p class="text-l font-semibold text-white">Signup</p></a>
            </div>
            </div>
        </div>
        @extends('layout.navbar')
        <div class="w-full pt-40 relative h-full px-5">
            <div class="max-w-6xl px-6 mx-auto">
                <div class=" hidden md:block bg-gray-50  px-4 sm:px-6 py-3 sm:py-1 rounded-lg mb-10" style="width: 33%">
                    <nav class="flex text-xs sm:text-base" aria-label="Breadcrumb">
                        <a href="{{route('dashboard.user_dashboard')}}" class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">Home</a>
                        <span class="mx-2.5 text-gray-300">&gt;</span>
                        <a href="{{route('decorations.home_decor')}}"  class="text-gray-500 hover:text-gray-700 transition duration-150 ease-in-out">Home Decorations</a>
                        <span class="mx-2.5 text-gray-300">&gt;</span>
                        <a href="#" class="text-gray-900">Details</a>
                    </nav>
                </div>
                <div class="flex flex-col  md:flex-row gap-10 md:gap-12 items-center bg-white rounded-lg  border-0 border-gray-900  sm:border p-0 sm:p-8">
                    <div class="w-full md:w-1/2 lg:w-1/3">
                        <img class=" object-cover w-full h-auto md:h-64 lg:h-80 mb-6 md:mb-0" src="/illustrations/home-decor.png" alt="Home Decor Image">
                    </div>
                    <div class="md:w-1/2 lg:w-2/3 ">
                        <div class="px-4 md:px-0">
                            <p class="text-center sm:text-left font-bold text-2xl md:text-3xl lg:text-4xl text-gray-800">Home Vase</p>
                            <!-- Star Ratings -->
                            <div class="flex gap-1 items-center justify-center sm:justify-start mt-2">
                                <svg width="28" height="28" fill="#fddf1c" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                                </svg>
                                <svg width="28" height="28" fill="#fddf1c" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                                </svg>
                                <svg width="28" height="28" fill="#fddf1c" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                                </svg>
                                <svg width="28" height="28" fill="none" stroke="#fddf1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.951 2.927c-.299-.921-1.602-.921-1.902 0L9.53 7.601a1 1 0 0 1-.951.69H3.665c-.968 0-1.372 1.24-.588 1.81l3.976 2.888a1 1 0 0 1 .363 1.118l-1.518 4.674c-.3.921.755 1.688 1.538 1.118l3.976-2.888a1 1 0 0 1 1.176 0l3.976 2.888c.783.57 1.838-.196 1.538-1.118l-1.518-4.674a1 1 0 0 1 .363-1.118l3.976-2.888c.783-.57.381-1.81-.588-1.81H15.42a1 1 0 0 1-.95-.69l-1.519-4.674Z"></path>
                                </svg>
                                <span class="text-gray-400  w-full">(120 reviews)</span>
                            </div>
                            <p class="pt-2 text-lg font-semibold text-gray-800">&#8369;350</p>
                            <!-- Product Description -->
                            <p class="pt-4 text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae mauris nec nisi fermentum suscipit. Morbi tempor, sapien non luctus suscipit, lorem justo consequat nunc, non commodo augue quam nec urna.
                            </p>
                            <!-- Add to Cart & Buy with Pay Buttons -->

                            <div class="flex flex-col md:flex-row gap-6 mt-6">
                                {{-- @if(auth()->check())
                                <a href="{{route('productDetails.details')}}"><button class="w-full md:w-auto border-2 border-slate-900  text-slate-900 font-semibold py-3 px-6 md:px-8 lg:px-10 xl:px-12 rounded-full ">
                                    Add to Cart
                                </button></a>
                                @else
                                <a href="{{ route('users.login') }}"><button class="w-full md:w-auto border-2 border-slate-900  text-slate-900 font-semibold py-3 px-6 md:px-8 lg:px-10 xl:px-12 rounded-full ">
                                    Add to Cart
                                </button></a>
                                @endif --}}
                                <form action="" method="POST">
                                    @csrf
                                    <input class="border mt-2 border-slate-900 w-20 text-center py-2 px-4 rounded-md focus:outline-none focus:border-blue-500" type="number" value="1" min="1" name="quantity">
                                    <button type="submit" class="w-full md:w-auto border-2 border-slate-900 text-slate-900 font-semibold py-3 px-6 md:px-8 lg:px-10 xl:px-12 rounded-full">
                                        Add to Cart
                                    </button>
                                </form>
                                
                                <button class="w-full md:w-auto bg-yellow-400 text-slate-900 font-semibold py-3 px-6 md:px-8 lg:px-10 xl:px-12 rounded-full ">
                                    Buy with Pay
                                </button>
                            </div>
                            {{-- <hr class="text-gray-900 mt-5 mb-2">
                            <span c>Category: <span class="text-yellow-500 ">Home Decorations</span> </span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-10 border-t border-gray-200">
        <div class="container mx-auto py-12">
            <div class="max-w-6xl px-6 mx-auto relative">
                <h3 class="font-semibold  mb-5 text-2xl text-slate-900">Contribute</h3>
                <div class="mb-10 flex gap-4 flex-col sm:flex-row">
                    <button class="border border-gray-700 px-6 py-2 rounded-full">Write a review</button>
                    <button class="border border-gray-700 px-6 py-2 rounded-full">Upload a photo</button>
                </div>
                <div class="flex items-center gap-6 mb-6">
                    <span id="descriptionClick" class="font-medium cursor-pointer rounded-lg px-6 py-1 hover:bg-gray-50 desc-Btn active" onclick="toggleButton('.desc-Btn');">Description</span>
                    <span id="reviewsClick" class="font-medium cursor-pointer rounded-lg hover:bg-gray-50 px-6 py-1 reviews-Btn" onclick="toggleButton('.reviews-Btn');">Reviews(0)</span>
                </div>
                <div id="descriptionDiv" class="  gap-4 pt-4">
                    <div  class=" w-full h-auto px-6 py-6 container_nav rounded-lg">
                        <div class="flex flex-col justify-center items-center w-full h-96 border rounded-lg border-gray-400">
                            <div class="sm:px-10 px-0 flex">
                                <h3 class="text-slate-900 font-bold sm:text-2xl text-1xl text-center">No Description yet. Be the first to share your thoughts!</h3>
                            </div>
                            <div class="pt-10 gap-4 flex-col flex sm:flex-row">
                                <button class="px-10 py-2 bg-gray-800 rounded-full text-white">Write a review</button>
                                <button class="px-10 py-2 border border-gray-500 rounded-full">Upload a Photo</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
                <div id="reviewDiv" class="hidden">
                <div  class=" flex flex-col sm:flex-row gap-4 pt-4 ">
                    <div  class=" sm:w-96 w-full h-auto px-6    py-2  rounded-lg">
                        <div class="flex gap-1 items-center">
                            <span class="font-semibold ">4.6</span>
                            <svg width="26" height="26" fill="#059669" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                            </svg>
                            <svg width="26" height="26" fill="#059669" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                            </svg>
                            <svg width="26" height="26" fill="#059669" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.859 3.512c.36-1.105 1.923-1.105 2.282 0l1.284 3.95a1.2 1.2 0 0 0 1.14.829h4.155c1.162 0 1.645 1.488.705 2.172l-3.36 2.44a1.2 1.2 0 0 0-.437 1.342l1.284 3.95c.36 1.106-.906 2.026-1.848 1.342l-3.36-2.44a1.2 1.2 0 0 0-1.41 0l-3.36 2.44c-.94.684-2.205-.236-1.846-1.341l1.284-3.95a1.2 1.2 0 0 0-.437-1.342l-3.359-2.44c-.94-.684-.456-2.172.706-2.172h4.153a1.2 1.2 0 0 0 1.141-.828l1.284-3.95-.001-.002Z"></path>
                            </svg>
                            <svg width="26" height="26" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.951 2.927c-.299-.921-1.602-.921-1.902 0L9.53 7.601a1 1 0 0 1-.951.69H3.665c-.968 0-1.372 1.24-.588 1.81l3.976 2.888a1 1 0 0 1 .363 1.118l-1.518 4.674c-.3.921.755 1.688 1.538 1.118l3.976-2.888a1 1 0 0 1 1.176 0l3.976 2.888c.783.57 1.838-.196 1.538-1.118l-1.518-4.674a1 1 0 0 1 .363-1.118l3.976-2.888c.783-.57.381-1.81-.588-1.81H15.42a1 1 0 0 1-.95-.69l-1.519-4.674Z"></path>
                            </svg>
                            <span class=" text-gray-500 text-s ">12 reviews</span>
                            </div>
                            <div class="pt-7 text-sm ">
                                <div class="flex items-center gap-4 relative">
                                    <span class="text-green-500">Excellent</span>
                                    <div class="relative w-1/2">
                                        <div class="overflow-hidden h-3 bg-gray-200 rounded-full">
                                            <div class="bg-green-500 h-full rounded-full" style="width: 32%;"></div>
                                        </div>
                                        <span class="absolute top-0 right-0 -mt-2 text-xs text-gray-600">32%</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 py-2">
                                    <span class="text-green-500">Very good</span>
                                    <div class="relative w-1/2">
                                        <div class="overflow-hidden h-3 bg-gray-200 rounded-full">
                                            <div class="bg-green-500 h-full rounded-full" style="width: 32%;"></div>
                                        </div>
                                        <span class="absolute top-0 right-0 -mt-2 text-xs text-gray-600">32%</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 py-2">
                                    <span class="text-yellow-500">Average</span>
                                    <div class="relative w-1/2">
                                        <div class="overflow-hidden h-3 bg-gray-200 rounded-full">
                                            <div class="bg-yellow-500 h-full rounded-full" style="width: 32%;"></div>
                                        </div>
                                        <span class="absolute top-0 right-0 -mt-2 text-xs text-gray-600">32%</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 py-2">
                                    <span class="text-yellow-500">Poor</span>
                                    <div class="relative w-1/2">
                                        <div class="overflow-hidden h-3 bg-gray-200 rounded-full">
                                            <div class="bg-yellow-500 h-full rounded-full" style="width: 32%;"></div>
                                        </div>
                                        <span class="absolute top-0 right-0 -mt-2 text-xs text-gray-600">32%</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4 py-2">
                                    <span class="text-red-500">Terrible</span>
                                    <div class="relative w-1/2">
                                        <div class="overflow-hidden h-3 bg-gray-200 rounded-full">
                                            <div class="bg-red-500 h-full rounded-full" style="width: 32%;"></div>
                                        </div>
                                        <span class="absolute top-0 right-0 -mt-2 text-xs text-gray-600">32%</span>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                    <div  class=" sm:w-2/3 w-full h-auto px-6 py-6 container_nav rounded-lg">
                        <div class="flex flex-col justify-center items-center w-full h-96 border rounded-lg border-gray-400">
                            <div class="sm:px-10 px-0 flex">
                                <h3 class="text-slate-900 font-bold sm:text-2xl text-1xl text-center">No Reviews yet. Be the first to share your thoughts!</h3>
                            </div>
                            <div class="pt-10 gap-4 flex-col flex sm:flex-row">
                                <button class="px-10 py-2 bg-gray-800 rounded-full text-white">Write a review</button>
                                <button class="px-10 py-2 border border-gray-500 rounded-full">Upload a Photo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
                
                
            </div>
        </div>
    </body>
    @include('layout.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

    $(document).ready(function() {
        $('#descriptionClick').click(function(event) {
            event.preventDefault(); 
            $('#reviewDiv').hide();
            if (!$("#descriptionDiv").is(":visible")) {
                $('#descriptionDiv').show(); 
            }
        });

        $('#reviewsClick').click(function(event) {
            event.preventDefault(); 
            $('#descriptionDiv').hide();
            if (!$("#reviewDiv").is(":visible")) {
                $('#reviewDiv').show(); 
            }
        });
    });

    function toggleButton(className) {
        var elements = document.querySelectorAll('.desc-Btn, .reviews-Btn');
        elements.forEach(function(element) {
            if (element.classList.contains('active') && element.className !== className) {
                element.classList.remove('active');
            }
        });
        
        var clickedElement = document.querySelector(className);
        clickedElement.classList.add('active');
    }



    </script>
    </html>