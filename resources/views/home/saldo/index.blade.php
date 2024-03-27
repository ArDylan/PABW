@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div class="w-full">
        <p class="text-lg">Saldo</p>
        <div class="flex flex-row justify-between">
            <div class="text-2xl font-bold">Rp.{{ $userSaldo->nominal }}</div>
            <div class="text-xl flex flex-row justify-between items-center">
                <label class="text-red-500 mr-2">
                    Top Up
                </label>
                <i class="fa-solid fa-angle-right text-red-500"></i>
            </div>
        </div>
    </div>

    <div class="mt-5 bg-white p-3 rounded-lg">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="history-tab"
                data-tabs-toggle="#history-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="history-tab" data-tabs-target="#history"
                        type="button" role="tab" aria-controls="history" aria-selected="false">Semua riwayat</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="income-tab" data-tabs-target="#income" type="button" role="tab" aria-controls="income"
                        aria-selected="false">Pemasukan</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="outcome-tab" data-tabs-target="#outcome" type="button" role="tab" aria-controls="outcome"
                        aria-selected="false">Pengeluaran</button>
                </li>
            </ul>
        </div>

        <div id="history-tab-content">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="history" role="tabpanel"
                aria-labelledby="history-tab">
                @foreach ($saldoHistories as $saldoHistory)
                    <div
                        class="py-3 px-1 mx-2 my-3 rounded-lg shadow-sm flex flex-row justify-between items-center
                      @if ($saldoHistory->id % 2 == 0) bg-gray-100 @else bg-gray-300 @endif 
                      ">
                        <div class="mx-4">
                            <p>{{ $saldoHistory->description }}</p>
                            <p>{{ $saldoHistory->time }}</p>
                        </div>
                        <div class="mx-4 text-blue-500">
                            <a href="">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
