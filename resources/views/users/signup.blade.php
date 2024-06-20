
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
        .z-10::-webkit-scrollbar {
            width: 6px;
        }

        .z-10::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .z-10::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .z-10::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
<body >
<div class="flex flex-col lg:flex-row h-screen  ">
    <div class="z-10 relative rounded-r-3xl overflow-auto flex  flex-col lg:flex-row w-full  md:w-1/2  shadow-inner max-w-4xl mx-auto sm:mx-0  h-full lg:max-h-screen p-10 md:h-full justify-center bg-slate-200 ">
        <img class="lg:w-32 lg:h-32   absolute lg:right-20  lg:top-10  hidden md:block  " src="/illustrations/welcome.png" alt="">
        <div class="w-full  md:px-20 sm:px-0 flex flex-col justify-center h-screen pb-10 pt-10 ">
            <h1 id="text" class="text-2xl  font-bold text-gray-800 mb-2" >Welcome to  Bili-<span class="text-yellow-400">Nao</span>!👋</h1>
            <p class="text-gray-600 mb-8">Already have an account? <a href="{{route('users.login')}}" class="text-gray-800 font-semibold">Login</a></p>
            <form class="mt-4" action="/signup" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                    <input  required type="name" id="name" name="name" class="mt-1  py-3 px-4 w-full rounded-full border-2 border-gray-500 " value="{{ old('name') }}" >
                    @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input  required type="email" id="email" name="email" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500 " value="{{ old('email') }}" >
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative mb-3">
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input required type="password" id="password" name="password" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500 " value="{{ old('password') }}">
                </div>
                <div class="relative mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Confirm Password</label>
                    <input required type="password" id="password_confirmation" name="password_confirmation" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500 " value="{{ old('password_confirmation') }}">
                </div>
                @error('password')
                <span class="text-red-500 text-sm mb-6">{{ $message }}</span>
                @enderror
                <div class="mb-6 flex items-center gap-2">
                    <input class="p-5 cursor-pointer" type="checkbox" id="showPassword">
                    <label for="showPassword" class="text-sm font-medium text-gray-900 cursor-pointer">See Password</label>
                </div>
                <div class="pb-10">
                <button name="login_btn" type="submit" class=" bg-gray-800 text-white w-full font-semibold  py-3 px-4 rounded-full ">
                Signup <i class="fa-solid fa-right-to-bracket pl-2" style="color: #ffffff;"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
    <!-- {{-- <div class="w-full hidden sm:block lg:w-3/4 flex items-center justify-center">
        <img src="{{ asset('images/group1.png') }}" alt="Your Image" class="w-full h-full object-cover " id="mockupImage" />
    </div> --}} -->
    <div class="w-full hidden md:block  lg:w-1/2 flex items-center justify-center">
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
