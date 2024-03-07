@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div class="justify-start items-start gap-6 inline-flex flex-col md:flex-row">
        <div class="p-[18px] bg-white rounded shadow flex-col justify-start items-start gap-3.5 inline-flex">
            <div class="self-stretch justify-between items-start inline-flex">
                <div class="pr-1 pb-2.5 justify-start items-center flex">
                    <div class="self-stretch flex-col justify-start items-start gap-2 inline-flex">
                        <div class="text-slate-500 text-2xl font-bold font-['Inter']">Room Information</div>
                        <div class="text-slate-500 text-2xl font-bold font-['Inter']">50</div>
                    </div>
                </div>
                <img src="/asset/img/icon-park-outline_list.jpg" class="w-6 h-6 relative"></img>
            </div>
            <div
                class="ThisMenuProvidesAComprehensiveViewOfRoomAdditionsAndReductions self-stretch text-black text-opacity-25 text-xs font-bold font-['Inter']">
                This menu provides a comprehensive view of room additions and reductions</div>
        </div>
        <div class="p-[18px] bg-white rounded shadow flex-col justify-start items-start gap-3.5 inline-flex">
            <div class=" self-stretch justify-between items-start inline-flex">
                <div class="pr-1 pb-2.5 justify-start items-center flex">
                    <div class="self-stretch flex-col justify-start items-start gap-2 inline-flex">
                        <div class=" text-slate-500 text-2xl font-bold font-['Inter']">Flight Information</div>
                        <div class=" text-slate-500 text-2xl font-bold font-['Inter']">24</div>
                    </div>
                </div>
                <img src="/asset/img/icon-park-outline_list.jpg" class="w-6 h-6 relative"></img>
            </div>
            <div class="self-stretch text-black text-opacity-25 text-xs font-bold font-['Inter']">This menu provides a
                comprehensive view of flight additions and reductions</div>
        </div>
        <div class=" p-[18px] bg-white rounded shadow flex-col justify-start items-start gap-3.5 inline-flex">
            <div class="self-stretch justify-between items-start inline-flex">
                <div class="pr-[61px] pb-2.5 justify-start items-center flex">
                    <div class="self-stretch flex-col justify-start items-start gap-2 inline-flex">
                        <div class="text-slate-500 text-2xl font-bold font-['Inter']">User Identity</div>
                        <div class="text-slate-500 text-2xl font-bold font-['Inter']">10</div>
                    </div>
                </div>
                <img src="/asset/img/icon-park-outline_list.jpg" class="w-6 h-6 relative"></img>
            </div>
            <div class="self-stretch text-black text-opacity-25 text-xs font-bold font-['Inter']">This menu provides a
                comprehensive view of user additions and reductions</div>
        </div>
    </div>
@endsection
