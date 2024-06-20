
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
<body>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 min-h-screen">
        <div class="max-w-4xl lg:px-32 p-10 mx-auto bg-slate-200 w-full sm:h-full order-2 lg:order-1 rounded-t-3xl lg:rounded-r-3xl lg:rounded-none">
            <a href="{{route('dashboard.user_dashboard')}}" class=" shadow-md text-gray-800 font-semibold mb-4 flex items-center space-x-2 bg-white w-32 px-2 py-1 rounded-full">
                <svg width="22" height="22" fill="#6b7280" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.248 6.352a1.2 1.2 0 0 1 0 1.696L11.297 12l3.951 3.952a1.2 1.2 0 0 1-1.696 1.696l-4.8-4.8a1.2 1.2 0 0 1 0-1.696l4.8-4.8a1.2 1.2 0 0 1 1.696 0Z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-800 text-sm">Go back</span>
            </a>
            <div class="mt-14 w-full flex flex-col">
                <h1 id="text" class="text-2xl font-bold text-gray-800 mb-2" style="clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);">Welcome to Bili-<span class="text-orange-400">Nao!</span>👋</h1>
                <p class="text-gray-600 mb-8 ">New to Bili-<span class="text-orange-400">Nao</span>? <a href="{{route('users.signup')}}" class="text-gray-800 font-semibold">Create an Account</a></p>
                <form class="mt-4" action="/login" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                        <input required type="email" id="email" name="email" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500">
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input required type="password" id="password" name="password" class="mt-1 py-3 px-4 w-full rounded-full border-2 border-gray-500 pr-10">
                    </div>
                    @error('password')
                    <span class="text-red-500 text-sm mb-6">{{ $message }}</span>
                    @enderror
                    <div class="mb-6">
                        <a href="{{ route('users.forgot_password') }}" class="text-gray-800 font-semibold">Forgot Password?</a>
                    </div>
                    <button name="login_btn" type="submit" class="bg-gray-800 text-white w-full font-semibold py-3 px-4 rounded-full transition duration-200">
                        Log In <i class="fa-solid fa-right-to-bracket pl-2" style="color: #ffffff;"></i>
                    </button>
                </form>
            </div>
            
    </div>
    <div class="w-full  min-h-[310px] sm:h-full  order-1 lg:order-2 flex justify-center items-center">
        <div class="carousel overflow-hidden relative w-full h-full">
            <img src="/images/group1.png" alt="Image 1" class=" carousel-item absolute top-0 left-0 w-70 object-cover transition-opacity opacity-100" />
            <img  src="/illustrations/mockupUser.png" alt="Image 2" class="carousel-item absolute top-0 left-0 w-full h-full object-cover transition-opacity opacity-0" />
            <img src="/images/group1.png" alt="Image 3" class="carousel-item absolute top-0 left-0 w-full h-full object-cover transition-opacity opacity-0" />
        </div>
    </div>
</div>
<script src="/js/script.js"></script>
</script>
</body>
</html>
