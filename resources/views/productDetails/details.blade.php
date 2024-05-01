<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <a href="{{route('dashboard.seller')}}"> <p class="text-sm space-x-6 font-semibold text-white">Sell on Bili-Nao</p></a>
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
            
            <div class="flex flex-col  md:flex-row gap-10 md:gap-12 items-center bg-white rounded-lg  border border-gray-900  p-8 md:p-12">
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
                            <button class="w-full md:w-auto border-2 border-slate-900  text-slate-900 font-semibold py-3 px-6 md:px-8 lg:px-10 xl:px-12 rounded-full ">
                                Add to Cart
                            </button>
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
        <div class="max-w-6xl px-6 mx-auto">
            <div class="flex items-center gap-6 mb-6">
                    <span id="descriptionClick" class="font-medium cursor-pointer  ">Description</span>
                    <span id="reviewsClick" class="font-medium cursor-pointer  rounded-lg bg-gray-800 px-6 py-1 text-white">Reviews(0)</span>
            </div>
            <div  id="descriptionDiv" class="w-full hidden h-52 bg-gray-100">
                <h1>This is Description</h1>
            </div>
            @include('decorations.comments-box')
            
            
        </div>
    </div>
    
    

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

// $(document).ready(function() {
//     $('#descriptionClick').click(function(event) {
//         event.preventDefault(); 
//         $('#reviewDiv').slideUp('fast');
//         $('#descriptionDiv').slideToggle('fast');
//     });

//     $('#reviewsClick').click(function(event) {
//         event.preventDefault(); 
//         $('#descriptionDiv').slideUp('fast');
//         $('#reviewDiv').slideToggle('fast');
//     });
// });




</script>
</html>