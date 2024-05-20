<div class="flex h-screen main_content">
    <!-- Sidebar -->
    <div class="hidden z-10 sm:block fixed top-0 left-0 h-screen w-80 bg-white overflow-y-auto">
        <div class="px-6 py-6">
            <a href="{{ route('dashboard.user_dashboard') }}">
                <h1 class="text-4xl text-center font-bold text-gray-800">
                    Bili-<span class="text-yellow-400">Nao</span>
                </h1>
            </a>
            <nav class="mt-11">
                <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-gray-100 rounded-3xl">
                    <i class="fas fa-chart-line text-orange-600"></i> Dashboard
                </a>
                <a id="productToggle" href="{{ route('dashboard.add_product') }}" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-gray-100  rounded-3xl">
                    <i class="fas fa-plus text-red-600"></i> Add Product
                </a>
                <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-gray-100 rounded-3xl">
                    <i class="fas fa-cogs text-teal-600"></i> Manage Products
                </a>
                <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-gray-100 rounded-3xl">
                    <i class="fas fa-envelope text-blue-600"></i> Messages
                </a>
                <!-- Add other sidebar links here -->
            </nav>
        </div>
        <div class="border-t border-gray-200 px-6 py-6 absolute bottom-0 w-full">
            <div class="flex items-center">
                <a href="">
                    <div class="flex items-center justify-center hover:bg-gray-100 px-6 py-1 rounded-3xl">
                        <img src="/illustrations/TikTok Profile Picture Ideas.jpg" alt="Profile Picture" class="w-8 h-8 rounded-full">
                        @if(Auth::check())
                        <span class="ml-3 text-sm">Hi, <span class="font-semibold text-slate-800">{{ Auth::user()->name }}</span></span>
                        @endif
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>