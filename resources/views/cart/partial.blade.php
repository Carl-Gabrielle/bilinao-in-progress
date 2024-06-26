
    <div class="flex justify-between items-center mb-4">
        <p class="text-2xl text-gray-900">Your Cart <span class="bg-red-500 px-6 text-white rounded-lg">{{ $cartItems->count() }}</span></p>
        <svg id="cart-close" class="cursor-pointer" width="26" height="26" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.152 5.152a1.2 1.2 0 0 1 1.696 0L12 10.303l5.152-5.151a1.2 1.2 0 1 1 1.696 1.696L13.697 12l5.151 5.152a1.2 1.2 0 0 1-1.696 1.696L12 13.697l-5.152 5.151a1.2 1.2 0 0 1-1.696-1.696L10.303 12 5.152 6.848a1.2 1.2 0 0 1 0-1.696Z" clip-rule="evenodd"></path>
        </svg>
    </div>
    <div class="flex justify-between items-center mb-4">
        <p class="text-gray-400">Product</p>
        <p class="text-gray-400">Total</p>
    </div>
    <hr class="border-gray-200 mb-4">

    @foreach($cartItems as $item)
    <div class="flex items-center mb-4">
        <div class="w-24 h-24 rounded border-2 flex items-center justify-center mr-4">
            <img class="w-16 h-16" src="{{ asset('images/' . $item->product_image) }}" alt="{{ $item->title }}">
        </div>
        <div>
            <p class="text-sm">{{ $item->product_title }}</p>
            <p class="text-sm text-gray-400 py-2">&#8369;{{ $item->price }}</p>
            <div class="flex items-center justify-between border border-gray-300 rounded h-11 w-24 relative">
                <button class="px-3 py-1 border-r border-gray-300 focus:outline-none decrease-quantity" data-item-id="{{ $item->id }}" aria-label="Decrease quantity">-</button>
                <span class="px-3">{{ $item->quantity }}</span>
                <button class="px-3 py-1 border-l border-gray-300 focus:outline-none increase-quantity" data-item-id="{{ $item->id }}" aria-label="Increase quantity">+</button>
                <iconify-icon id="delete-item-{{ $item->id }}" class="absolute -right-8 bottom-3 cursor-pointer trash-icon" data-icon="bi:trash-fill" data-inline="false" style="font-size: 1.3rem;"></iconify-icon>
            </div>
        </div>
        <div class="h-24 ml-8">
            <p class="text-sm text-gray-400">&#8369;{{ $item->price }}</p>
        </div>
    </div>

    @endforeach

    <hr class="border-gray-200 mt-44">
    <div class="flex items-center justify-between">
        @php
    $totalPrice = 0; 
    @endphp
    @foreach($cartItems as $item)
        @php
        $totalPrice += $item->price * $item->quantity; 
        @endphp
    @endforeach
        <p>Subtotal</p>
        <p class="text-sm text-gray-400">&#8369;<span class="total-price">{{ number_format($totalPrice, 2) }}</span></p>
    </div>
    <div>
        <p class="text-gray-400 text-xs pb-2">Taxes and shipping calculated at checkout</p>
    </div>
    <a href="{{route('cart.checkout')}}">
    <button class="w-full bg-yellow-300 py-2 text-white rounded-2xl" style="background-color: orangered;">Checkout</button>
    </a>