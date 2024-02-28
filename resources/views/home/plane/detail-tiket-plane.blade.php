@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-home'))

@section('content')
<div class="pt-20 md:pt-40">
    <div class="flex flex-col gap-14 items-center lg:justify-center lg:items-start lg:gap-6 lg:flex lg:flex-row">
        <!--Colom 1-->
        <div class=" flex-col justify-start items-start gap-6 inline-flex">
            <div class="flex-col justify-center items-start gap-2
        inline-flex">
                <div class="p-5 flex-col justify-start items-start gap-2 inline-flex">
                    <div class="DetailOrders text-black text-lg font-semibold font-['Inter']">Detail Orders</div>
                    <div
                        class="DetailKontakIniAkanDigunakanUntukPengirimanETiketDanKeperluanRefundReschedule text-black text-opacity-50 text-xs font-normal font-['Inter']">
                        Detail kontak ini akan digunakan untuk pengiriman e-tiket dan keperluan refund/reschedule</div>
                </div>
                <div class="w-full p-3 bg-zinc-100 rounded flex-col justify-start items-start gap-6 inline-flex">
                    <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                        <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">Alessandro
                            Benaya Pinem</div>
                    </div>
                    <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                        <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">08950118964
                        </div>
                    </div>
                    <div class="w-full px-2 py-[18px] bg-white rounded justify-start items-start gap-2 inline-flex">
                        <div class="AlessandroBenayaPinem text-black text-base font-normal font-['Inter']">
                            jomama@gmail.com</div>
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
                                <div class=" text-black text-lg font-normal font-['Inter']">72</div>
                                <div class="TotalSeat text-black text-lg font-normal font-['Inter']">Total Seat</div>
                            </div>
                            <div class="Frame73 justify-start items-center gap-2 flex">
                                <img src="/asset/img/has_seat.png" class="w-6 h-6 relative" alt="">
                                <div class=" text-black text-lg font-normal font-['Inter']">24</div>
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
            <div class="w-full justify-between items-center inline-flex">
                <div class="text-black text-lg font-semibold font-['Inter']">Sriwijaya Air</div>
                <div class="text-black text-[24px] font-bold font-['Inter']">Bandung - Jakarta</div>
            </div>
            <div class="w-full border border-black border-opacity-20"></div>
            <div class=" text-center text-black text-base font-semibold font-['Inter']">Return | Monday, 5 February 2024 | 2
                Passenger | Economy</div>
            <div class="h-20 py-2 flex-col justify-center items-center gap-2 inline-flex">
                <div class="text-black text-[32px] font-semibold font-['Inter']">14:30 - 15:55</div>
                <div class="text-black text-opacity-50 text-sm font-normal font-['Inter']">1j 25m Langsung</div>
            </div>
            <div class="w-full justify-between items-center inline-flex">
                <div class="text-blue-500 text-md font-semibold font-['Inter']">Can Refund | Reschedule</div>
                <div class="w-auto px-3 py-3 bg-blue-500 rounded justify-start items-center gap-2 inline-flex">
                    <div class="PaymentDetails text-white text-sm font-medium font-['Inter']">Payment Details</div>
                    <img src="/asset/img/sendfill.png" class="w-3 h-3 relative">
                </div>
            </div>
            <div class="w-full border border-black border-opacity-20"></div>

            <!--Rekomendasi Flights pada tujuan yg sama-->
            <div class="w-full p-3 bg-white rounded flex-col justify-start items-start gap-6 inline-flex">
                <div class="w-full justify-between items-start inline-flex">
                    <div class="text-black text-lg font-semibold font-['Inter']">Batik Air</div>
                    <div class="text-black text-lg font-semibold font-['Inter']">Bandung -Jakarta</div>
                </div>
                <div class="text-stone-300 text-sm font-semibold font-['Inter']">Return | Monday, 5 February 2024 | 2
                    Passenger | Economy</div>
                <div class="w-full justify-between items-center inline-flex">
                    <div class="text-slate-500 text-lg font-semibold font-['Inter']">Rp 2.350.000</div>
                    <div class="px-3 py-2 bg-blue-500 rounded justify-center items-center gap-2 flex">
                        <div class="text-white text-sm font-medium font-['Inter']">Show Flights</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
