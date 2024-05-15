@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    
    <div class="justify-start items-start bg-white rounded-lg shadow">
        <!--header-->
        <div class="w-full px-10 py-4 gap-3 items-center inline-flex">
            <div class="justify-start items-center gap-6 flex">
                <a href="{{route('admin.saldo')}}" class="px-1.5 py-0.5 text-white bg-gray-500 rounded-full">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
            <div class="text-slate-500 text-2xl font-bold font-['Inter']">History Saldo - {{ucWords($userSaldoId->user->name)}}</div>
        </div>
        <!--Content-->
        <div class="py-4 px-6 w-fit">
            <!--list saldo contoh-->
            <div class="container mx-auto px-4 overflow-x-auto">
                    <div class="w-[1100px]">
                        @livewire('history-saldo-table', ['userSaldoId' => $userSaldoId->id])
                </div>
            </div>
            <!--end of list saldo contoh-->
        </div>
        <!--End of content-->
    </div>
@endsection
