@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <!-- Main modal -->


    <div class="justify-start items-start bg-white rounded-lg shadow">
        <!--header-->
        <div class="w-full px-10 py-4 justify-between items-center inline-flex">
            <div class="text-slate-500 text-2xl font-bold font-['Inter']">History Ticket</div>
            {{-- <div class="justify-start items-center gap-6 flex">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    <i class="fa-solid fa-plus me-1"></i>Add New Flight
                </button>
            </div> --}}
        </div>

        <!--Content-->
        <div class="py-4 px-6 w-fit">
            <!--list kamar contoh-->
            <div class="container mx-auto px-4 overflow-x-auto">
                    <div class="w-[1100px]">
                    <livewire:history-table />
                </div>
            </div>
            <!--end of list kamar contoh-->
        </div>
        <!--End of content-->
    </div>
@endsection
