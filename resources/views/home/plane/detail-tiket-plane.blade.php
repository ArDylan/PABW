@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-home'))

@section('content')
    <div class="pt-20 md:pt-40">
        <div class="flex flex-col gap-14 items-center lg:justify-center lg:items-start lg:gap-6 lg:flex lg:flex-row">
            <!--Colom 1-->
            <div class=" flex-col justify-start items-start gap-6 inline-flex">
                <div class="flex-col justify-center items-start gap-2 inline-flex">
                    <div class="p-5 flex-col justify-start items-start gap-2 inline-flex">
                        <div class="DetailOrders text-black text-lg font-semibold font-['Inter']">Detail Orders</div>
                        <div
                            class="DetailKontakIniAkanDigunakanUntukPengirimanETiketDanKeperluanRefundReschedule text-black text-opacity-50 text-xs font-normal font-['Inter']">
                            Detail kontak ini akan digunakan untuk pengiriman e-tiket dan keperluan refund/reschedule</div>
                    </div>
                    <form method="POST" action="{{ route('order.ticket', $flight->id) }}">
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
                        <div class="w-full p-3 bg-zinc-100 rounded flex-col justify-start items-start gap-6 inline-flex">
                            <input
                                class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex"
                                type="text" name="customer_name" value="{{ auth()->user()->name ?? '' }}"
                                placeholder="Customer Name">
                            <input
                                class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex"
                                type="text" name="customer_phone" value="{{ auth()->user()->phone ?? '' }}"
                                placeholder="Customer Phone">
                            <input
                                class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex"
                                type="email" name="customer_email" value="{{ auth()->user()->email ?? '' }}"
                                placeholder="Customer Email">
                        </div>
                        <div class=" w-full flex-col justify-start items-start gap-6 inline-flex">
                            <div class="p-3 self-stretch flex-col justify-start items-center gap-3 flex">
                                <div class="text-black text-lg font-semibold font-['Inter']">Flight Seat</div>
                            </div>
                            <div class="self-stretch flex-col justify-center items-center gap-2 flex">
                                <div class="h-6 px-2 bg-white rounded justify-center items-start gap-6 inline-flex">
                                    <div class="justify-start items-center gap-2 flex">
                                        <div class=" text-black text-lg font-normal font-['Inter']">
                                            {{ $flight->total_seat }}
                                        </div>
                                        <div class="TotalSeat text-black text-lg font-normal font-['Inter']">Total Seat
                                        </div>
                                    </div>
                                    <div class="Frame73 justify-start items-center gap-2 flex">
                                        <div class=" text-black text-lg font-normal font-['Inter']">{{ $flight->bookTiket->count() }}</div>
                                        <div class="HasPassenger text-black text-lg font-normal font-['Inter']">Has
                                            Passenger
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!--Colom 2-->
            <div class="p-3 bg-zinc-100 rounded flex-col justify-start items-center gap-6 inline-flex">
                <div class="w-full justify-between items-center inline-flex">
                    <div class="text-black text-lg font-semibold font-['Inter'] uppercase">{{ $flight->airline->name }}</div>
                    <div class="text-black text-[24px] font-bold font-['Inter']">{{ $flight->from }} -
                        {{ $flight->destination }}</div>
                </div>
                <div class="w-full border border-black border-opacity-20"></div>
                <div class=" text-center text-black text-base font-semibold font-['Inter']">
                    {{ $flight->flight_date }} | {{ $flight->total_seat }} Passenger | Economy</div>
                <div class="h-20 py-2 flex-col justify-center items-center gap-2 inline-flex">
                    <div class="text-black text-[32px] font-semibold font-['Inter']">{{ $flight->departure }} -
                        {{ $flight->arrival }}</div>
                    <div class="text-black text-opacity-50 text-sm font-normal font-['Inter']">{{ $time_diff }}
                        Langsung
                    </div>
                </div>
                <div class="w-full text-center">
                    <button class=" px-3 py-3 bg-blue-500 rounded justify-center items-center">
                        <div class="PaymentDetails text-white text-sm font-medium font-['Inter'] ">
                            Pesan Sekarang
                        </div>
                    </button>
                </div>
                <div class="w-full border border-black border-opacity-20"></div>
                </form>
                <!--Rekomendasi Flights pada tujuan yg sama-->
                @foreach ($suggestion as $tiket)
                    <div class="w-full p-3 bg-white rounded flex-col justify-start items-start gap-6 inline-flex">
                        <div class="w-full justify-between items-start inline-flex">
                            <div class="text-black text-lg font-semibold font-['Inter']">{{ $tiket->airline->name }}</div>
                            <div class="text-black text-lg font-semibold font-['Inter']">{{ $tiket->from }} -
                                {{ $tiket->departure }}</div>
                        </div>
                        <div class="text-stone-300 text-sm font-semibold font-['Inter']">Return | {{ $tiket->flight_date }} |
                            {{ $tiket->total_seat }} Passenger | Economy</div>
                        <div class="w-full justify-between items-center inline-flex">
                            <div class="text-slate-500 text-lg font-semibold font-['Inter']">Rp {{ $tiket->price }}</div>
                            <div class="px-3 py-2 bg-blue-500 rounded justify-center items-center gap-2 flex">
                                <div class="text-white text-sm font-medium font-['Inter']">Show Flights</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
