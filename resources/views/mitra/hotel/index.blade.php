@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div class="justify-start items-start gap-6">
        <!--header-->
        <div class="w-full px-6 py-4 bg-white justify-between items-center inline-flex">
            <div class="text-slate-500 text-2xl font-bold font-['Inter']">FLIGHTS SERVICE</div>
            <div class="justify-start items-center gap-6 flex">
                <button class="justify-start items-center gap-2 flex">
                    <img src="/asset/img/002-notification-1.jpg" class="w-[20px] h-[20px] bg-slate-100 rounded"></img>
                    <div class="Notification1 w-[25px] h-[25px] relative"></div>
                </button>
            </div>
        </div>

        <!--end of header-->
        <!--menu kamar-->
        <div class="flex flex-row gap-4">
            <!--tambah kamar-->
            <button class="bg-white px-4 py-4 rounded justify-start items-center gap-[22px] inline-flex">
                <div class="MingcuteHotelLine p-5 bg-violet-100 rounded-[90px] justify-start items-center gap-2 flex">
                    <div class="Group w-6 h-6 relative">
                    </div>
                </div>
                <div class="Frame370 flex-col justify-start items-center gap-2 inline-flex">
                    <div class="TambahKamar w-[147.49px] text-neutral-800 text-xl font-semibold font-['Inter']">
                        Add Seat</div>
                    <div class="MenambahkanKamar w-[167.83px] text-slate-400 text-base font-normal font-['Inter']">
                        Adding New Seat Flights</div>
                </div>
            </button>
            <!--end of tambah kamar-->
            <!--status kamar user-->
            <button class="bg-white px-4 py-4 rounded justify-start items-center gap-[22px] inline-flex">
                <div class="MingcuteHotelLine p-5 bg-violet-100 rounded-[90px] justify-start items-center gap-2 flex">
                    <div class="Group w-6 h-6 relative">
                    </div>
                </div>
                <div class="Frame370 flex-col justify-start items-center gap-2 inline-flex">
                    <div class="TambahKamar w-[147.49px] text-neutral-800 text-xl font-semibold font-['Inter']">
                        Flight Status</div>
                    <div class="MenambahkanKamar w-[167.83px] text-slate-400 text-base font-normal font-['Inter']">
                        User For Ordering Seat</div>
                </div>
            </button>
            <!--end of status kamar user-->
        </div>
        <!--Content-->
        <div class="w-full py-4 px-2 bg-slate-100 items-start gap-6 inline-flex flex-col">
            <div class="text-slate-500 text-2xl font-bold font-['Inter']">List Seat</div>
            <!--list kamar contoh-->
            <div class="w-full p-[15px] bg-white rounded-[20px] justify-between items-center inline-flex">
                <div class="flex-col justify-start items-center gap-[7px] inline-flex">
                    <div class="StandardRoom text-neutral-800 text-base font-medium font-['Inter']">Airlines</div>
                    <div class="ItIsALongEstablished text-slate-400 text-[15px] font-normal font-['Inter']">Batik Air</div>
                </div>
                <div class="flex-col justify-start items-center gap-[7px] inline-flex">
                    <div class="text-neutral-800 text-base font-medium font-['Inter']">Total Seat</div>
                    <div class="flex flex-row gap-2">
                        <p class="text-slate-400 text-[15px] font-normal font-['Inter']">0</p>
                        <label for="">-</label>
                        <p class="text-slate-400 text-[15px] font-normal font-['Inter']">75</p>
                    </div>
                </div>
                <div class=" flex-col justify-start items-center gap-[7px] inline-flex">
                    <div class="text-neutral-800 text-base font-medium font-['Inter']">Flights Date</div>
                    <div class="Standar text-slate-400 text-[15px] font-normal font-['Inter']">24 / 05 / 2024</div>
                </div>
                <div class=" flex-col justify-start items-center gap-[7px] inline-flex">
                    <div class=" text-neutral-800 text-base font-medium font-['Inter']">Location</div>
                    <div class="flex flex-row gap-2">
                        <div class="From text-slate-400 text-[15px] font-normal font-['Inter']">Balikpapan</div>
                        <label class="text-slate-400" for="">-</label>
                        <div class="TO text-slate-400 text-[15px] font-normal font-['Inter']">Samarinda</div>
                    </div>
                </div>
                <button
                    class=" px-[30px] py-2 rounded-[50px] border border-slate-400 justify-start items-center gap-2 flex">
                    <div class="text-center text-slate-400 text-[15px] font-medium font-['Inter']">View Details</div>
                </button>
            </div>
            <!--end of list kamar contoh-->
        </div>
        <!--End of content-->
    </div>
@endsection
