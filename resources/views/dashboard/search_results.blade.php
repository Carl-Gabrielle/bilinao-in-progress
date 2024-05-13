
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css" integrity="sha384-...." crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/MotionPathPlugin.min.js"></script>   
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    @if($results->isEmpty())
    <p>No products found for "{{ $query }}".</p>
@else
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 ">
    @foreach ($results as $result)
        <div class="bg-white rounded-lg shadow-md p-6">
            <img class="w-full h-48 object-cover mb-4" src="{{ asset('images/' . $result->product_image) }}" alt="{{ $result->title }} Image">
            <h3 class="text-lg font-semibold mb-2">{{ $result->title }}</h3>
            <p class="text-gray-700 mb-2">Price: &#8369;{{ $result->price }}</p>
            <form action="{{ url('addcart', $result->id) }}" method="POST">
                @csrf
            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full">Add to Cart</button>
            </form>
        </div>
    @endforeach
</div>
@endif

</body>


</html>