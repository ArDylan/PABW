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
                    <div class="w-full p-3 bg-zinc-100 rounded flex-col justify-start items-start gap-6 inline-flex">
                        <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                            <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">
                                {{ auth()->user()->name }}</div>
                        </div>
                        <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                            <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">
                                {{ auth()->user()->phone }}
                            </div>
                        </div>
                        <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                            <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">
                                {{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <div class=" w-full flex-col justify-start items-start gap-6 inline-flex">
                        <div class="p-3 self-stretch flex-col justify-start items-center gap-3 flex">
                            <div class="text-black text-lg font-semibold font-['Inter']">Flight Seat</div>
                        </div>
                        <div class="self-stretch flex-col justify-center items-center gap-2 flex">
                            <div class="h-6 px-2 bg-white rounded justify-center items-start gap-6 inline-flex">
                                <div class="justify-start items-center gap-2 flex">
                                    <img src="/asset/img/total_seat.png" class="w-6 h-6 relative" alt="">
                                    <div class=" text-black text-lg font-normal font-['Inter']">{{ $flight->total_seat }}
                                    </div>
                                    <div class="TotalSeat text-black text-lg font-normal font-['Inter']">Total Seat</div>
                                </div>
                                <div class="Frame73 justify-start items-center gap-2 flex">
                                    <img src="/asset/img/has_seat.png" class="w-6 h-6 relative" alt="">
                                    <div class=" text-black text-lg font-normal font-['Inter']">-</div>
                                    <div class="HasPassenger text-black text-lg font-normal font-['Inter']">Has Passenger
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Colom 2-->
            <div class="p-3 bg-zinc-100 rounded flex-col justify-start items-center gap-6 inline-flex">
                <form method="POST" action="{{ route('order.ticket', $flight->id) }}">
                    @csrf
                    <div class="w-full justify-between items-center inline-flex">
                        <div class="text-black text-lg font-semibold font-['Inter']">{{ $flight->airline->name }}</div>
                        <div class="text-black text-[24px] font-bold font-['Inter']">{{ $flight->from }} -
                            {{ $flight->departure }}</div>
                    </div>
                    <div class="w-full border border-black border-opacity-20"></div>
                    <div class=" text-center text-black text-base font-semibold font-['Inter']">Return |
                        {{ $flight->flight_date }} | {{ $flight->total_seat }} Passenger | Economy</div>
                    <div class="h-20 py-2 flex-col justify-center items-center gap-2 inline-flex">
                        <div class="text-black text-[32px] font-semibold font-['Inter']">{{ $flight->departure }} -
                            {{ $flight->arrival }}</div>
                        <div class="text-black text-opacity-50 text-sm font-normal font-['Inter']">{{ $time_diff }}
                            Langsung
                        </div>
                    </div>
                    <div class="w-full justify-between items-center inline-flex">
                        <div class="text-blue-500 text-md font-semibold font-['Inter']">Can Refund | Reschedule</div>
                        <button
                            class="w-auto px-3 py-3 @if ($booked) bg-gray-500 @else bg-blue-500 @endif rounded justify-start items-center gap-2 inline-flex "
                            @if ($booked) disabled @endif>
                            <div class="PaymentDetails text-white text-sm font-medium font-['Inter'] ">
                                @if ($booked)
                                Telah Dipesan
                                @else
                                Pesan Sekarang
                                @endif
                            </div>
                            <img src="/asset/img/sendfill.png" class="w-3 h-3 relative">
                        </button>
                    </div>
                    <div class="w-full border border-black border-opacity-20"></div>
                </form>
                <!--Rekomendasi Flights pada tujuan yg sama-->
                <div class="w-full p-3 bg-white rounded flex-col justify-start items-start gap-6 inline-flex">
                    <div class="w-full justify-between items-start inline-flex">
                        <div class="text-black text-lg font-semibold font-['Inter']">{{ $flight->airline->name }}</div>
                        <div class="text-black text-lg font-semibold font-['Inter']">{{ $flight->from }} -
                            {{ $flight->departure }}</div>
                    </div>
                    <div class="text-stone-300 text-sm font-semibold font-['Inter']">Return | {{ $flight->flight_date }} |
                        {{ $flight->total_seat }} Passenger | Economy</div>
                    <div class="w-full justify-between items-center inline-flex">
                        <div class="text-slate-500 text-lg font-semibold font-['Inter']">Rp {{ $flight->price }}</div>
                        <div class="px-3 py-2 bg-blue-500 rounded justify-center items-center gap-2 flex">
                            <div class="text-white text-sm font-medium font-['Inter']">Show Flights</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
