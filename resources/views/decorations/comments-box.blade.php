<div id="reviewDiv" class="w-2/4 h-auto px-6 py-2 bg-gray-100">

    <div class="mb-4">
        <div class="flex justify-between mb-2">
            <span class="text-gray-400">Carl</span> <!-- Assuming you have a user relationship in your Comment model -->
            <div>
                <button class="text-blue-500 mr-2">Edit</button>
                <button class="text-red-500">Delete</button>
            </div>
        </div>
        <p></p>
    </div>

    <!-- New comment form -->
    <form action="" method="POST" id="reviewForm" class="mb-4">
        @csrf
        <textarea name="content" id="reviewText" class="w-full h-20 px-3 py-2 border border-gray-300 rounded-md" placeholder="Write your review here..." required></textarea>
        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md">Post Review</button>
    </form>
</div>
