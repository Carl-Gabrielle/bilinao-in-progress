
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
<body>
<div class="flex flex-col lg:flex-row h-screen  " >
    <div class=" z-10 rounded-r-3xl   flex flex-col relative lg:flex-row w-full md:w-1/2  shadow-inner max-w-4xl mx-auto sm:mx-0  h-full lg:max-h-screen p-10 md:h-full justify-center bg-slate-200" >
        <img class="lg:w-36 lg:h-28    absolute lg:right-20  lg:top-16  hidden md:block  " src="/illustrations/forgot.png" alt="">
        <div class="w-full  md:px-20  sm:px-0 flex flex-col justify-center ">
                <h1 id="text" class="text-2xl   font-bold text-gray-800 mb-2" >Forgot your Password?</h1>
            <p class="text-gray-600 mb-8 leading-6">Please enter the email address associated with your account and we will email you a link to reset your password.🔑 </p>
            <form class="mt-4  " action="" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                    <input  required type="email" id="email" name="email" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500 " >
                    @if(session('error'))
                    <span class="text-red-500 text-sm">{{ session('error') }}</span>
                    @endif
                    @if(session('success'))
                    <span class="text-green-500 text-sm">{{ session('error') }}</span>
                    @endif
                </div>
                <div class="mb-6">
                <button name="login_btn" type="submit" class="bg-gray-800 text-white py-3 px-4 w-full rounded-full  transition duration-200">
                    Reset Password <i class="fa-solid fa-right-to-bracket pl-2" style="color: #ffffff;"></i>
                </button>
            </div>
            <div class="text-center ">
                <a class="text-gray-800 w-full font-semibold  py-3 px-4" href="{{route('users.login')}}">
                    Back to Login 
            </a>
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
