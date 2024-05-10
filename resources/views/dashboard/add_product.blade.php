 <!-- Main content -->
 <div  id="productForm" class="flex-grow  sm:ml-80 px-6 py-8 hidden">
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
</form>
</div>