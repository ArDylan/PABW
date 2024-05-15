@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-home'))

@section('content')
    <header
        class="pt-40 pr-4 pb-40 pl-4 flex flex-col gap-14 items-center justify-start self-stretch shrink-0 h-auto relative overflow-hidden bg-cover bg-center"
        style="background: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.35)), url('{{ asset('image/plane-banner.jpg') }}') center; background-size: cover; background-repeat: no-repeat;">

        <!--end of Navigasian-->
        <div class="flex flex-col gap-6 items-center justify-center self-stretch shrink-0 relative">
            <div
                class="text-[#ffffff] text-center font-['Inter-SemiBold',_sans-serif] text-5xl font-semibold relative self-stretch">
                PLANNING YOUR VACATION NOW </div>
            <div class="text-[#ffffff] text-left font-['Inter-Bold',_sans-serif] text-sm font-bold relative"> EMBARK
                ON UNFORGETTABEL JOURNEYS WITH BOOMS </div>
        </div>
        <!--Fitur utama-->
        <main
            class="bg-blue-500 w-auto bg-blue-4 rounded-lg pt-3 pr-6 pb-3 pl-6 flex flex-col gap-6 items-start justify-start shrink-0 relative overflow-hidden"
            style="box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);">
            <div class="flex flex-row gap-3 items-center justify-start self-stretch shrink-0 relative">
                <div class="flex flex-row gap-3 items-center justify-start shrink-0 relative">
                    <div class="text-white text-left font-['Inter-Medium',_sans-serif] text-sm font-medium relative">
                        Find Flights </div>
                </div>
                <div class="border-solid border-[#ffffff] border-t border-r-[0] border-b-[0] border-l-[0] shrink-0 w-[19.65px] h-0 relative"
                    style="transform-origin: 2 0; transform: rotate(-90deg) scale(1, 1); ">
                </div>
                <div class="flex flex-row gap-3 items-center justify-start shrink-0 relative">
                    <div
                        class="text-[rgba(0,0,0,0.25)] text-left font-['Inter-Medium',_sans-serif] text-sm font-medium relative">
                        Find Stays </div>
                </div>
            </div>
            <div class="flex flex-row gap-2 items-center justify-start flex-wrap self-stretch shrink-0 relative">
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-row gap-2 items-center justify-start flex-wrap self-stretch shrink-0 relative">
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Trip </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11" height="11"
                        viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center md:justify-end self-stretch shrink-0 relative">
                <div class="flex flex-row gap-3 items-center justify-start w-full md:w-auto shrink-0 relative">
                    <div
                        class="bg-white w-full rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row gap-2 items-center justify-center md:items-left md:justify-start shrink-0 relative">
                        <div class="shrink-0 w-3 h-3 relative overflow-hidden">
                            <svg class="h-[auto] absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%] overflow-visible"
                                width="13" height="12" viewBox="0 0 13 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.6175 2.84298C10.8335 2.24548 10.2545 1.66648 9.65702 1.88298L2.35452 4.52398C1.75502 4.74098 1.68252 5.55898 2.23402 5.87848L4.56502 7.22798L6.64652 5.14648C6.74082 5.05541 6.86712 5.00501 6.99822 5.00615C7.12932 5.00729 7.25473 5.05987 7.34743 5.15257C7.44013 5.24528 7.49272 5.37069 7.49386 5.50178C7.495 5.63288 7.4446 5.75918 7.35352 5.85348L5.27202 7.93498L6.62202 10.266C6.94102 10.8175 7.75902 10.7445 7.97602 10.1455L10.6175 2.84298Z"
                                    fill="#4682A9" />
                            </svg>
                        </div>
                        <div
                            class="text-blue-4 text-left font-['Inter-Regular',_sans-serif] text-[10px] font-normal relative">
                            Show Details </div>
                    </div>
                </div>
            </div>
        </main>
        <!--end of Fitur utama-->
    </header>


    <div class="md:px-40 py-20">
        <div class="mb-10 px-4 lg:px-0 flex flex-row items-start justify-between self-stretch shrink-0 relative">
            <div class="text-[#000000] text-left font-['Inter-SemiBold',_sans-serif] text-lg font-semibold relative">
                Our Recommendation Flights </div>
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                    class="inline-flex items-center text-white bg-blue-500 border border-gray-300 focus:outline-none hover:bg-blue-400 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5"
                    type="button">
                    <svg class="w-3 h-3 text-white me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                    </svg>
                    Filter
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="z-10 hidden w-48 bg-blue-500 divide-y divide-gray-100 rounded-lg"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownRadioButton">
                        <li>
                            <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                <label for="filter-radio-example-1"
                                    class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                    day</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--fitur rekomendasi flights-->
        <section
            class="px-4 lg:px-0 gap-8 pt-3 pb-3 flex flex-row items-center justify-center flex-wrap self-stretch shrink-0 relative overflow-hidden">
            @foreach ($flights as $flight)
                <a href="{{route("detail.tiket", $flight->id)}}"
                    class="w-full lg:w-auto bg-gray-100 rounded p-3 flex flex-col gap-3 items-start justify-start shrink-0 relative overflow-hidden">
                    <div class="flex flex-row items-start justify-between self-stretch shrink-0 relative">
                        <div
                            class="text-[#000000] text-left font-['Inter-SemiBold',_sans-serif] text-md font-semibold relative">
                            {{$flight->airline->name}} </div>
                        <div
                            class="text-[#000000] text-left font-['Inter-SemiBold',_sans-serif] text-md font-semibold relative">
                            {{$flight->from}} - {{$flight->destination}} </div>
                    </div>
                    <div
                        class="text-shadow-background text-left font-['Inter-SemiBold',_sans-serif] text-md font-semibold relative">
                        Return | {{$flight->flight_date}} | {{$flight->total_seat}} Passenger | Economy </div>
                    <div class="flex flex-row items-center justify-between self-stretch shrink-0 relative">
                        <div
                            class="text-blue-4 text-left font-['Inter-SemiBold',_sans-serif] text-md font-semibold relative">
                            Rp {{$flight->price}} </div>
                        <div class="shrink-0 w-6 h-6 relative overflow-hidden">
                            <svg class="h-[auto] absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%] overflow-visible"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.235 5.68603C20.667 4.49103 19.509 3.33303 18.314 3.76603L3.70904 9.04803C2.51004 9.48203 2.36504 11.118 3.46804 11.757L8.13004 14.456L12.293 10.293C12.4816 10.1109 12.7342 10.0101 12.9964 10.0124C13.2586 10.0146 13.5095 10.1198 13.6949 10.3052C13.8803 10.4906 13.9854 10.7414 13.9877 11.0036C13.99 11.2658 13.8892 11.5184 13.707 11.707L9.54404 15.87L12.244 20.532C12.882 21.635 14.518 21.489 14.952 20.291L20.235 5.68603Z"
                                    fill="#4682A9" />
                            </svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </section>
    </div>

    <!--footer-->
    <div
        class="bg-gray-100 pt-4 pr-12 pb-4 pl-12 flex flex-row items-start justify-between flex-wrap self-stretch shrink-0 relative overflow-hidden">
        <div class="flex flex-col gap-[18px] items-start justify-start shrink-0 relative">
            <div class="flex flex-col gap-1 items-start justify-center shrink-0 relative">
                <div class="text-[#000000] text-left font-['Inter-Bold',_sans-serif] text-xl font-bold relative">
                    BOOMS </div>
                <div
                    class="text-[rgba(0,0,0,0.50)] text-left font-['Inter-Regular',_sans-serif] text-[8px] font-normal relative">
                    Booking &amp; Flights </div>
            </div>
            <div class="text-[#000000] text-left font-['Inter-Medium',_sans-serif] text-[10px] font-medium relative">
                Planning Your Vacation Now </div>
        </div>
        <div class="flex flex-col gap-[18px] items-start justify-start shrink-0 relative">
            <div class="flex flex-col gap-1 items-start justify-center shrink-0 relative">
                <div class="text-[#000000] text-left font-['Inter-Bold',_sans-serif] text-xl font-bold relative">
                    About us </div>
                <div
                    class="text-[rgba(0,0,0,0.50)] text-left font-['Inter-Regular',_sans-serif] text-[8px] font-normal relative">
                    provide users with information about the company </div>
            </div>
            <div class="text-[#000000] text-left font-['Inter-Medium',_sans-serif] text-[10px] font-medium relative">
                Our Story </div>
            <div class="text-[#000000] text-left font-['Inter-Medium',_sans-serif] text-[10px] font-medium relative">
                Our Carrers </div>
        </div>
        <div class="flex flex-col gap-[18px] items-start justify-start shrink-0 relative">
            <div class="flex flex-col gap-1 items-start justify-center shrink-0 relative">
                <div class="text-[#000000] text-left font-['Inter-Bold',_sans-serif] text-xl font-bold relative">
                    Contact us </div>
                <div
                    class="text-[rgba(0,0,0,0.50)] text-left font-['Inter-Regular',_sans-serif] text-[8px] font-normal relative">
                    feedback or suggestions for the company. </div>
            </div>
            <div class="text-[#000000] text-left font-['Inter-Regular',_sans-serif] text-[10px] font-normal relative">
                Email : Boomscrop@gmail.com </div>
            <div class="text-[#000000] text-left font-['Inter-Regular',_sans-serif] text-[10px] font-normal relative">
                Phone : 089501189672 </div>
            <div class="flex flex-row gap-4 items-start justify-start shrink-0 relative">
                <svg class="shrink-0 w-6 h-6 relative overflow-visible" width="25" height="24"
                    viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_38_399)">
                        <path
                            d="M4.09532 1.5C2.20425 1.5 0.666748 2.84531 0.666748 4.5V19.5C0.666748 21.1547 2.20425 22.5 4.09532 22.5H21.2382C23.1292 22.5 24.6667 21.1547 24.6667 19.5V4.5C24.6667 2.84531 23.1292 1.5 21.2382 1.5H4.09532ZM20.0114 5.4375L14.4507 10.9969L20.9917 18.5625H15.8703L11.8632 13.9734L7.27211 18.5625H4.72746L10.6739 12.6141L4.40068 5.4375H9.65068L13.2775 9.63281L17.4667 5.4375H20.0114ZM17.9864 17.2313L8.88461 6.69844H7.36853L16.5721 17.2313H17.981H17.9864Z"
                            fill="black" />
                    </g>
                    <defs>
                        <clipPath id="clip0_38_399">
                            <rect width="24" height="24" fill="white" transform="translate(0.666748)" />
                        </clipPath>
                    </defs>
                </svg>
                <div class="shrink-0 w-6 h-6 relative overflow-hidden">
                    <svg class="h-[auto] absolute right-[0%] left-[0%] w-[100%] bottom-[0%] top-[0%] h-[100%] overflow-visible"
                        width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.0417 0H6.29175C3.18515 0 0.666748 2.5184 0.666748 5.625V18.375C0.666748 21.4816 3.18515 24 6.29175 24H19.0417C22.1483 24 24.6667 21.4816 24.6667 18.375V5.625C24.6667 2.5184 22.1483 0 19.0417 0Z"
                            fill="url(#paint0_radial_38_402)" />
                        <path
                            d="M19.0417 0H6.29175C3.18515 0 0.666748 2.5184 0.666748 5.625V18.375C0.666748 21.4816 3.18515 24 6.29175 24H19.0417C22.1483 24 24.6667 21.4816 24.6667 18.375V5.625C24.6667 2.5184 22.1483 0 19.0417 0Z"
                            fill="url(#paint1_radial_38_402)" />
                        <path
                            d="M12.6676 2.625C10.1215 2.625 9.80194 2.63616 8.802 2.68163C7.80394 2.72738 7.12265 2.88534 6.52659 3.11719C5.9099 3.35662 5.38687 3.67697 4.86581 4.19822C4.34428 4.71937 4.02394 5.24241 3.78375 5.85881C3.55125 6.45506 3.39309 7.13662 3.34819 8.13422C3.30347 9.13425 3.29175 9.45394 3.29175 12.0001C3.29175 14.5463 3.303 14.8648 3.34837 15.8647C3.39431 16.8628 3.55228 17.5441 3.78394 18.1402C4.02356 18.7568 4.3439 19.2799 4.86515 19.8009C5.38612 20.3225 5.90915 20.6436 6.52537 20.883C7.1219 21.1148 7.80328 21.2728 8.80115 21.3186C9.80119 21.364 10.1205 21.3752 12.6665 21.3752C15.2128 21.3752 15.5314 21.364 16.5313 21.3186C17.5294 21.2728 18.2114 21.1148 18.8079 20.883C19.4243 20.6436 19.9466 20.3225 20.4675 19.8009C20.989 19.2799 21.3093 18.7568 21.5496 18.1404C21.78 17.5441 21.9382 16.8626 21.9851 15.8649C22.03 14.865 22.0417 14.5463 22.0417 12.0001C22.0417 9.45394 22.03 9.13444 21.9851 8.13441C21.9382 7.13634 21.78 6.45516 21.5496 5.85909C21.3093 5.24241 20.989 4.71937 20.4675 4.19822C19.9461 3.67678 19.4245 3.35644 18.8074 3.11728C18.2097 2.88534 17.5281 2.72728 16.53 2.68163C15.53 2.63616 15.2116 2.625 12.6647 2.625H12.6676ZM11.8266 4.31447C12.0762 4.31409 12.3547 4.31447 12.6676 4.31447C15.1708 4.31447 15.4674 4.32347 16.4559 4.36838C17.37 4.41019 17.8661 4.56291 18.1966 4.69125C18.6341 4.86112 18.946 5.06428 19.274 5.3925C19.6021 5.72062 19.8052 6.03309 19.9755 6.47062C20.1038 6.80062 20.2567 7.29675 20.2984 8.21081C20.3433 9.19913 20.353 9.49594 20.353 11.9979C20.353 14.4999 20.3433 14.7968 20.2984 15.7851C20.2566 16.6991 20.1038 17.1952 19.9755 17.5253C19.8056 17.9629 19.6021 18.2744 19.274 18.6023C18.9458 18.9305 18.6343 19.1335 18.1966 19.3035C17.8665 19.4324 17.37 19.5848 16.4559 19.6266C15.4676 19.6715 15.1708 19.6812 12.6676 19.6812C10.1643 19.6812 9.86756 19.6715 8.87934 19.6266C7.96528 19.5844 7.46915 19.4317 7.1384 19.3033C6.70097 19.1333 6.3884 18.9303 6.06028 18.6022C5.73215 18.274 5.52909 17.9623 5.35875 17.5246C5.2304 17.1945 5.0775 16.6984 5.03587 15.7843C4.99097 14.796 4.98197 14.4992 4.98197 11.9956C4.98197 9.49209 4.99097 9.19678 5.03587 8.20847C5.07769 7.29441 5.2304 6.79828 5.35875 6.46781C5.52872 6.03028 5.73215 5.71781 6.06037 5.38969C6.3885 5.06156 6.70097 4.85841 7.1385 4.68816C7.46897 4.55925 7.96528 4.40691 8.87934 4.36491C9.74419 4.32581 10.0793 4.31409 11.8266 4.31212V4.31447ZM17.672 5.87109C17.0509 5.87109 16.547 6.37453 16.547 6.99572C16.547 7.61681 17.0509 8.12072 17.672 8.12072C18.2931 8.12072 18.797 7.61681 18.797 6.99572C18.797 6.37463 18.2931 5.87072 17.672 5.87072V5.87109ZM12.6676 7.18556C10.0088 7.18556 7.85315 9.34125 7.85315 12.0001C7.85315 14.6589 10.0088 16.8136 12.6676 16.8136C15.3264 16.8136 17.4814 14.6589 17.4814 12.0001C17.4814 9.34134 15.3262 7.18556 12.6674 7.18556H12.6676ZM12.6676 8.87503C14.3934 8.87503 15.7927 10.2741 15.7927 12.0001C15.7927 13.7259 14.3934 15.1252 12.6676 15.1252C10.9417 15.1252 9.54262 13.7259 9.54262 12.0001C9.54262 10.2741 10.9417 8.87503 12.6676 8.87503Z"
                            fill="white" />
                        <defs>
                            <radialGradient id="paint0_radial_38_402" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(7.04175 25.8485) rotate(-90) scale(23.7858 22.1227)">
                                <stop stop-color="#FFDD55" />
                                <stop offset="0.1" stop-color="#FFDD55" />
                                <stop offset="0.5" stop-color="#FF543E" />
                                <stop offset="1" stop-color="#C837AB" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_38_402" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(-3.35335 1.72884) rotate(78.681) scale(10.6324 43.827)">
                                <stop stop-color="#3771C8" />
                                <stop offset="0.128" stop-color="#3771C8" />
                                <stop offset="1" stop-color="#6600FF" stop-opacity="0" />
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-[18px] items-center justify-end shrink-0 h-[140px] relative">
            <div class="text-[#000000] text-left font-['Inter-Medium',_sans-serif] text-[10px] font-medium relative">
                © 2024 Booms, inc | Our Maps | Privacy </div>
        </div>
    </div>
    <!--end footer-->
@endsection
