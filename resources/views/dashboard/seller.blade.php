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
        <div class="hidden z-10 sm:block fixed top-0 left-0 h-screen w-80 bg-white overflow-y-auto">
            <div class="px-6 py-6">
                <a href="{{ route('dashboard.user_dashboard') }}">
                    <h1 class="text-4xl text-center font-bold text-gray-800">
                        Bili-<span class="text-yellow-400">Nao</span>
                    </h1>
                </a>
                <nav class="mt-11">
                    <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-chart-line text-orange-600"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-plus text-red-600"></i> Add Product
                    </a>
                    <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
                        <i class="fas fa-cogs text-teal-600"></i> Manage Products
                    </a>
                    <a href="#" class="flex items-center gap-2 px-6 py-3 text-sm hover:bg-slate-800 hover:text-white rounded-3xl">
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
    
        <!-- Main content -->
        <div class="flex-grow ml-80 px-6 py-8">
            @if(session('success'))
            <div id="toast" class="fixed bottom-4 right-4 z-50">
                <div class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            
            <h2 class="text-xl font-semibold mb-4">Add Product</h2>
           <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Product Title</label>
                <input type="text" id="title" name="title" class="w-1/2 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter product title" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Category</label>
                <div class="flex flex-wrap">
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category1" name="category" value="home_decorations" class="mr-2">
                        <label for="category1">Home Decorations</label>
                    </div>
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category2" name="category" value="tie_dye_shirts" class="mr-2">
                        <label for="category2">Tie Dye Shirts</label>
                    </div>
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category3" name="category" value="hand_made_bags" class="mr-2">
                        <label for="category3">Hand Made Bags</label>
                    </div>
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category4" name="category" value="accessories" class="mr-2">
                        <label for="category4">Accessories</label>
                    </div>
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category5" name="category" value="paintings" class="mr-2">
                        <label for="category5">Paintings</label>
                    </div>
                    <div class="w-1/2 md:w-1/3 mb-2">
                        <input type="radio" id="category6" name="category" value="hand_made_mats" class="mr-2">
                        <label for="category6">Hand Made Mats</label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-gray-700 font-medium">Stock</label>
                <input type="number" id="stock" name="stock" class="w-1/2 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter stock quantity" required>
            </div>
            
            
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-medium">Price</label>
                <input type="number" id="price" name="price" class="w-1/2 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter price" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea id="description" name="description" class="w-1/2 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500" placeholder="Enter description" required></textarea>
            </div>
            <div class="mb-4">
                <label for="product_image" class="block text-gray-700 font-medium">Product Image</label>
                <input type="file" id="product_image" name="product_image" accept="image/*" class="w-1/2 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500" multiple required>
                <img id="preview_image" src="#" alt="Product Image Preview" class="hidden mt-2 w-32 h-32">
            </div>
            
            
            <button type="submit" class="mb-10 px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">Submit</button>
        </div>
    </form>
    </div>
    
    
    </main>
</body>
<script>
    document.getElementById('product_image').addEventListener('change', function(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var img = document.getElementById('preview_image');
            img.src = reader.result;
            img.classList.remove('hidden');
        };

        reader.readAsDataURL(input.files[0]);
    });
    setTimeout(() => {
        document.getElementById('toast').classList.add('hidden');
    }, 3000); 
</script>

</html>