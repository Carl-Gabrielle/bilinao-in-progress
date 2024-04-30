<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<style>
    body{
        background-color: #f1f1f1;
    }
    /* #182337
#050F28 */

</style>
<body>
   <main>
    <div class="flex h-screen main_content">
        <!-- Sidebar -->
        <div class="hidden z-10 sm:block fixed top-0 left-0 h-screen w-80 bg-white   overflow-y-auto">
            <div class="px-6 py-6">
                <a href="{{route('dashboard.user_dashboard')}}">
                    <h1 class="text-4xl text-center font-bold text-gray-800">
                        Bili-<span class="text-yellow-400">Nao</span>
                    </h1>
                </a>
                <nav class="mt-11 ">
                    <a href="#" class="flex items-center  gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-chart-line text-orange-600 "></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center  gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-plus text-red-600"></i> Add Product
                    </a>
                    <a href="#" class="flex items-center  gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-cogs text-teal-600"></i> Manage Products
                    </a>
                    <a href="#" class="flex items-center  gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-envelope text-blue-600"></i> Messages
                    </a>
                    <!-- Add other sidebar links here -->
                </nav>
            </div>
            <div class="border-t border-gray-200 px-6 py-6 absolute bottom-0 w-full">
                <div class="flex items-center ">
                    <a href="">
                        <div class="flex items-center justify-center hover:bg-gray-100 px-6 py-1 rounded-3xl">
                            <img src="/illustrations/TikTok Profile Picture Ideas.jpg" alt="Profile Picture" class="w-8 h-8 rounded-full">
                            @if(Auth::check())
                            <span class="ml-3 text-sm">Hi,  <span class="font-semibold text-slate-800">{{ Auth::user()->name }}</span></span>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    
    
   </main>
</body>
</html>