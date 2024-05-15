@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-home'))

@section('content')
    <div class="container mx-auto pt-5 mt-10">
        <div class="flex flex-wrap -mx-2">
            <!-- Column 1: Hotel Details -->
            <div class="w-full lg:w-1/2 px-2 mb-4">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Detail Orders</h5>
                    <p class="text-gray-500 mb-6">Detail kontak ini akan digunakan untuk pengiriman konfirmasi dan keperluan
                        refund/reschedule</p>
                    <form method="POST" action="{{ route('hotel.book', $hotel->id) }}">
                        @csrf
                        @if (session('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <span class="block sm:inline">{{ session('error') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 5.652a1 1 0 10-1.414-1.414L10 7.586 7.066 4.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 12.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934z" />
                                    </svg>
                                </span>
                            </div>
                        @endif
                        <div class="mb-4">
                            <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-2">Customer
                                Name</label>
                            <input type="text" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="customer_name" name="customer_name" value="{{ auth()->user()->name ?? '' }}"
                                placeholder="Customer Name">
                        </div>
                        <div class="mb-4">
                            <label for="customer_phone" class="block text-sm font-medium text-gray-700 mb-2">Customer
                                Phone</label>
                            <input type="text" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="customer_phone" name="customer_phone" value="{{ auth()->user()->phone ?? '' }}"
                                placeholder="Customer Phone">
                        </div>
                        <div class="mb-4">
                            <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">Customer
                                Email</label>
                            <input type="email" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="customer_email" name="customer_email" value="{{ auth()->user()->email ?? '' }}"
                                placeholder="Customer Email">
                        </div>
                        {{-- order_date --}}
                        <div class="mb-4">
                            <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">Order
                                Date</label>
                            <input type="date" required
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="order_date" name="order_date">
                        </div>
                </div>
            </div>

            <!-- Column 2: Hotel Info and Rooms -->
            <div class="w-full lg:w-1/2 px-2">
                <div class="bg-white shadow-md rounded-lg mb-4 p-6">
                    <h5 class="text-xl font-semibold text-uppercase mb-4">{{ $hotel->name }}</h5>
                    <p class="text-gray-700 mb-2">{{ $hotel->location }}</p>
                    <p class="text-gray-700">{{ $hotel->description }}</p>
                </div>

                <!-- List of Rooms -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h5 class="text-xl font-semibold mb-4">Available Rooms</h5>
                    @foreach ($availableRooms as $room)
                        <div class="bg-gray-100 rounded-lg p-4 mb-4">
                            <h6 class="text-lg font-semibold mb-2">{{ $room->name }}</h6>
                            <p class="text-gray-700 mb-2">{{ $room->room_number }}</p>
                            <p class="text-gray-700 mb-2">Price: Rp {{ number_format($room->price, 0, ',', '.') }}</p>
                            <button type="submit" name="room_id" value="{{ $room->id }}"
                                class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Book Now</button>
                        </div>
                    @endforeach
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
