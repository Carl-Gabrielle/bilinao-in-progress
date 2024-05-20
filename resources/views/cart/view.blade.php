{{-- <!-- resources/views/cart/view.blade.php -->
@extends('layouts.app')

@section('content')
<div class="relative left-8 sm:left-0">
    <div id="cart-list" class="fixed overflow-y-scroll right-5 sm:right-0 z-10 mt-2 w-96 origin-top-right rounded-md bg-white py-8 px-6 shadow-lg border border-gray-200">
        <div class="flex justify-between items-center mb-4">
            <p class="text-2xl text-gray-900"> <span class="bg-red-500 px-6 text-white rounded-lg">{{ $cartItems->count() }}</span></p>
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
                <img class="w-16 h-16" src="{{ asset('images/' . $item->product_image) }}" alt="">
            </div>
            <div>
                <p class="text-sm">{{ $item->product_title }}</p>
                <p class="text-sm text-gray-400 py-2">&#8369;{{ $item->price }}</p>
                <div class="flex items-center justify-between border border-gray-300 rounded h-11 w-24 relative">
                    <button class="px-3 py-1 border-r border-gray-300 focus:outline-none" aria-label="Decrease quantity">-</button>
                    <span class="px-3">1</span>
                    <button class="px-3 py-1 border-l border-gray-300 focus:outline-none" aria-label="Increase quantity">+</button>
                    <iconify-icon class="absolute -right-8 bottom-3 cursor-pointer" data-icon="bi:trash-fill" data-inline="false" style="font-size: 1.3rem;"></iconify-icon>
                </div>
            </div>
            <div class="h-24 ml-8">
                <p class="text-sm text-gray-400">&#8369;{{ $item->price }}</p>
            </div>
        </div>
        @endforeach

        <hr class="border-gray-200 mt-44">
        <div class="flex items-center justify-between">
            <p>Subtotal</p>
            <p class="text-sm text-gray-400 py-2">&#8369;{{ $cartItems->sum('price') }}</p>
        </div>
        <div>
            <p class="text-gray-400 text-xs pb-2">Taxes and shipping calculated at checkout</p>
        </div>
        <button class="w-full bg-yellow-300 py-2 text-white rounded-2xl" style="background-color: orangered;">Checkout</button>
    </div>
</div>
@endsection --}}
