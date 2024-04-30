
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>
</head>
<style>
            body{
                font-family: 'Poppins', sans-serif;
        background-color: #f1f1f1;
            }
        #eye, #eye-confirm-password {
            cursor: pointer;
            top: 65%;
            transform: translateY(-50%);
            right: 10px;
        }
        .container{
            background-color: white;
        }
    </style>
<body >
<div class="flex flex-col lg:flex-row h-screen  ">
    <div class="  relative flex flex-col lg:flex-row w-full  md:w-1/2  shadow-lg max-w-4xl mx-auto sm:mx-0 p-8 h-full lg:max-h-screen  md:h-full justify-center" style="background-color: white">
     <a href="{{route('dashboard.user_dashboard')}}" >  <i class="fas hidden sm:block h-10 fa-chevron-left text-1xl text-gray-800 "></i></a> 
        <img class="lg:w-32 lg:h-32    absolute lg:right-20  lg:top-14  hidden md:block  " src="/illustrations/signup.png" alt="">
        <div class="w-full   md:px-20 md:relative  flex flex-col justify-center ">
            <h1 id="text" class="text-2xl  font-bold text-gray-800 mb-2" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">Welcome to Bili-<span class="text-yellow-400">Nao</span>!👋</h1>
            <p class="text-gray-600 mb-8 ">New to Bili-<span class="text-yellow-400">Nao</span>? <a href="{{route('users.signup')}}" class="text-gray-800 font-semibold">Create an Account</a></p>
            <form class="mt-4" action="/login" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input required type="email" id="email" name="email" class="mt-1 p-3 w-full rounded-lg border-2 border-gray-300" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input required type="password" id="password" name="password" class="mt-1 p-3 w-full rounded-lg border-2 border-gray-300 pr-10">
                    <i class="fas fa-eye-slash absolute transform -translate-y-1/2 right-3 text-gray-700" id="eye"></i>
                </div>
                @error('password')
                    <span class="text-red-500 text-sm mb-6">{{ $message }}</span>
                @enderror
                <div class="mb-6">
                    <a href="{{ route('users.forgot_password') }}" class="text-gray-800 font-semibold">Forgot Password?</a>
                </div>
                <button name="login_btn" type="submit" class="bg-gray-800 text-white w-full font-semibold hover:bg-gray-700 py-3 px-4 rounded-lg transition duration-200">
                    Log In <i class="fa-solid fa-right-to-bracket pl-2" style="color: #ffffff;"></i>
                </button>
            </form>
            
        </div>
    </div>
    <!-- {{-- <div class="w-full hidden sm:block lg:w-1/2 flex items-center justify-center">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Your Image" class="w-full h-full object-cover " id="mockupImage" />
    </div> --}} -->
    <div class="w-full hidden sm:block  lg:w-1/2 md:flex items-center justify-center">
        <div class="carousel overflow-hidden relative w-full h-full">
            <img src="/images/group1.png" alt="Image 1" class="carousel-item absolute top-0 left-0 w-full h-full object-cover transition-opacity opacity-100" />
            <img  src="/images/Rectangle.jpg" alt="Image 2" class="carousel-item absolute top-0 left-0 w-full h-full object-cover transition-opacity opacity-0" />
            <img src="/images/group1.png" alt="Image 3" class="carousel-item absolute top-0 left-0 w-full h-full object-cover transition-opacity opacity-0" />
        </div>
    </div>
    
</div>
<script src="/js/script.js"></script>

</script>
</body>
</html>
