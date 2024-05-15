@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-home'))

@section('content')
    <header
        class="md:rounded-lg pt-40 pr-4 pb-40 pl-4 flex flex-col gap-14 items-center justify-start self-stretch shrink-0 h-auto relative overflow-hidden bg-cover bg-center"
        style="background: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.35)), url('asset/img/mountain.jpg') center; background-size: cover; background-repeat: no-repeat;">

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
            class="bg-[#4682A9] w-auto bg-blue-4 rounded-lg pt-3 pr-6 pb-3 pl-6 flex flex-col gap-6 items-start justify-start shrink-0 relative overflow-hidden"
            style="box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);">
            <div class="flex flex-row gap-3 items-center justify-start self-stretch shrink-0 relative">
                <div class="flex flex-row gap-3 items-center justify-start shrink-0 relative">
                    <img src="/asset/img/book2.png" class="rounded" alt="">
                    <div class=" text-left font-['Inter-Medium',_sans-serif] text-sm font-medium relative">
                        Find Flights </div>
                </div>
                <div class="border-solid border-[#ffffff] border-t border-r-[0] border-b-[0] border-l-[0] shrink-0 w-[19.65px] h-0 relative"
                    style="transform-origin: 2 0; transform: rotate(-90deg) scale(1, 1); ">
                </div>
                <div class="flex flex-row gap-3 items-center justify-start shrink-0 relative">
                    <img src="/asset/img/bed.png" class="rounded" alt="">
                    <div class="text-white text-left font-['Inter-Medium',_sans-serif] text-sm font-medium relative">
                        Find Stays </div>
                </div>
            </div>
            <div class="flex flex-row gap-2 items-center justify-start flex-wrap self-stretch shrink-0 relative">
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Location </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11"
                        height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Check-in </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11"
                        height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Check-out </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11"
                        height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.62377 3.82876L5.50002 6.87376L2.37627 3.82876C2.32046 3.77425 2.24553 3.74373 2.16752 3.74373C2.0895 3.74373 2.01458 3.77425 1.95877 3.82876C1.93174 3.85524 1.91027 3.88684 1.89562 3.92172C1.88096 3.9566 1.87341 3.99405 1.87341 4.03189C1.87341 4.06972 1.88096 4.10717 1.89562 4.14205C1.91027 4.17693 1.93174 4.20853 1.95877 4.23501L5.28189 7.47501C5.34025 7.53189 5.41852 7.56373 5.50002 7.56373C5.58151 7.56373 5.65978 7.53189 5.71814 7.47501L9.04127 4.23564C9.06848 4.20914 9.09011 4.17746 9.10488 4.14246C9.11965 4.10747 9.12726 4.06987 9.12726 4.03189C9.12726 3.9939 9.11965 3.9563 9.10488 3.92131C9.09011 3.88631 9.06848 3.85463 9.04127 3.82814C8.98546 3.77362 8.91053 3.7431 8.83252 3.7431C8.7545 3.7431 8.67958 3.77362 8.62377 3.82814V3.82876Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row items-center justify-between shrink-0 w-full md:w-[207px]  relative">
                    <div class="text-blue-4 text-left font-['Inter-Medium',_sans-serif] text-xs font-medium relative">
                        Participant </div><svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="11"
                        height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <div class="px-4 lg:px-0 flex flex-row items-start justify-between self-stretch shrink-0 relative mb-2">
            <div class="text-[#000000] text-left font-['Inter-SemiBold',_sans-serif] text-lg font-semibold relative">
                Our Recommendation Stay </div>
            <div class="flex flex-row gap-3 items-center justify-start shrink-0 relative">
                <svg class="shrink-0 w-6 h-6 relative overflow-visible" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.953 2.25H19.047C19.714 2.25 20.284 2.25 20.74 2.307C21.223 2.368 21.69 2.505 22.074 2.865C22.464 3.232 22.619 3.689 22.687 4.164C22.75 4.601 22.75 5.144 22.75 5.764V6.54C22.75 7.029 22.75 7.45 22.714 7.803C22.674 8.183 22.589 8.538 22.383 8.879C22.178 9.218 21.903 9.464 21.585 9.684C21.286 9.892 20.905 10.107 20.455 10.36L17.513 12.016C16.843 12.393 16.61 12.529 16.454 12.664C16.097 12.974 15.892 13.319 15.796 13.75C15.755 13.935 15.75 14.167 15.75 14.873V17.605C15.75 18.506 15.75 19.271 15.657 19.86C15.559 20.485 15.33 21.085 14.73 21.46C14.143 21.827 13.498 21.793 12.87 21.644C12.265 21.501 11.52 21.209 10.626 20.86L10.54 20.826C10.12 20.662 9.754 20.519 9.464 20.369C9.152 20.208 8.862 20.008 8.641 19.696C8.416 19.38 8.327 19.042 8.286 18.696C8.25 18.381 8.25 18.003 8.25 17.581V14.873C8.25 14.167 8.246 13.935 8.204 13.75C8.11322 13.3242 7.88137 12.9416 7.546 12.664C7.39 12.529 7.156 12.393 6.487 12.016L3.545 10.36C3.095 10.107 2.714 9.892 2.415 9.684C2.097 9.464 1.822 9.218 1.617 8.879C1.411 8.538 1.326 8.182 1.287 7.803C1.25 7.451 1.25 7.029 1.25 6.54V5.764C1.25 5.144 1.25 4.601 1.313 4.164C1.381 3.689 1.536 3.232 1.926 2.865C2.31 2.505 2.776 2.368 3.26 2.307C3.716 2.25 4.286 2.25 4.953 2.25ZM3.448 3.796C3.114 3.838 3.008 3.906 2.953 3.959C2.903 4.005 2.839 4.086 2.797 4.377C2.752 4.695 2.75 5.129 2.75 5.815V6.505C2.75 7.039 2.75 7.383 2.778 7.649C2.804 7.896 2.848 8.015 2.902 8.104C2.957 8.195 3.049 8.298 3.27 8.452C3.504 8.614 3.823 8.795 4.31 9.069L7.223 10.709L7.303 10.754C7.863 11.069 8.243 11.283 8.529 11.531C9.10742 12.019 9.50823 12.6845 9.669 13.424C9.75 13.791 9.75 14.204 9.75 14.784V17.543C9.75 18.015 9.751 18.305 9.777 18.523C9.799 18.721 9.836 18.788 9.863 18.827C9.893 18.869 9.953 18.934 10.152 19.037C10.364 19.146 10.657 19.261 11.119 19.442C12.08 19.818 12.727 20.069 13.216 20.185C13.695 20.299 13.853 20.24 13.934 20.189C14.002 20.146 14.107 20.059 14.176 19.626C14.248 19.169 14.25 18.523 14.25 17.542V14.784C14.25 14.204 14.25 13.791 14.332 13.424C14.4925 12.6847 14.893 12.0191 15.471 11.531C15.757 11.283 16.138 11.068 16.696 10.754L16.777 10.709L19.69 9.069C20.177 8.795 20.496 8.614 20.73 8.452C20.951 8.298 21.043 8.195 21.098 8.104C21.152 8.015 21.196 7.896 21.221 7.649C21.249 7.383 21.25 7.039 21.25 6.504V5.814C21.25 5.129 21.248 4.694 21.203 4.377C21.161 4.086 21.096 4.005 21.048 3.959C20.992 3.907 20.886 3.838 20.552 3.796C20.202 3.751 19.727 3.75 19 3.75H5C4.273 3.75 3.799 3.751 3.448 3.796Z"
                        fill="#4682A9" />
                </svg>
                <svg class="shrink-0 w-2.5 h-2.5 relative overflow-visible" width="10" height="10"
                    viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.12365 3.32876L4.9999 6.37376L1.87615 3.32876C1.82033 3.27425 1.74541 3.24373 1.66739 3.24373C1.58938 3.24373 1.51446 3.27425 1.45865 3.32876C1.43162 3.35524 1.41015 3.38684 1.3955 3.42172C1.38084 3.4566 1.37329 3.49405 1.37329 3.53189C1.37329 3.56972 1.38084 3.60717 1.3955 3.64205C1.41015 3.67693 1.43162 3.70853 1.45865 3.73501L4.78177 6.97501C4.84013 7.03189 4.9184 7.06373 4.9999 7.06373C5.08139 7.06373 5.15966 7.03189 5.21802 6.97501L8.54115 3.73564C8.56836 3.70914 8.58999 3.67746 8.60476 3.64246C8.61953 3.60747 8.62714 3.56987 8.62714 3.53189C8.62714 3.4939 8.61953 3.4563 8.60476 3.42131C8.58999 3.38631 8.56836 3.35463 8.54115 3.32814C8.48533 3.27362 8.41041 3.2431 8.3324 3.2431C8.25438 3.2431 8.17946 3.27362 8.12365 3.32814V3.32876Z"
                        fill="black" />
                </svg>
            </div>
        </div>
        <!--fitur rekomendasi stay-->
        <div
            class="px-4 lg:px-0 gap-8 pt-3 pb-3 flex flex-row items-center justify-center flex-wrap self-stretch shrink-0 relative overflow-hidden">
            @foreach ($hotels as $hotel)
                <a href="{{ route('hotel.show', ['hotel' => $hotel->id]) }}">
                    <div
                        class="shadow-md pb-10 rounded-lg flex flex-col gap-8 items-start justify-start flex-shrink-0 relative overflow-hidden">
                        <img class=" rounded-lg flex-shrink-0 w-350 h-250 object-cover" src="./asset/img/stay.png" />
                        <div
                            class=" px-8 flex flex-col gap-8 items-start justify-start self-stretch flex-shrink-0 relative">
                            <div class="flex flex-row items-start justify-between self-stretch flex-shrink-0 relative">
                                <div class=" text-black text-left font-semibold text-lg">{{ $hotel->name }},
                                    {{ $hotel->city }}</div>
                                <div class=" flex flex-row gap-4 items-center justify-center flex-shrink-0 relative">
                                    <svg class=" flex-shrink-0 w-6 h-6" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 17.27L16.15 19.78C16.91 20.24 17.84 19.56 17.64 18.7L16.54 13.98L20.21 10.8C20.88 10.22 20.52 9.12001 19.64 9.05001L14.81 8.64001L12.92 4.18001C12.58 3.37001 11.42 3.37001 11.08 4.18001L9.19 8.63001L4.36 9.04001C3.48 9.11001 3.12 10.21 3.79 10.79L7.46 13.97L6.36 18.69C6.16 19.55 7.09 20.23 7.85 19.77L12 17.27Z"
                                            fill="black" />
                                    </svg>
                                    <div class="text-black text-left font-semibold text-lg">{{ $hotel->rating }}</div>
                                </div>
                            </div>
                            {{-- <div class=" text-gray-400 text-left font-normal text-lg">Distance 86 Kilometer</div> --}}
                            <div class=" text-black text-left font-normal text-lg">
                                @if ($hotel->rooms->first())
                                    Rp {{ $hotel->rooms->first()->price }} - {{ $hotel->rooms->first()->name }}
                                @else
                                    Rp -
                                @endif
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>


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
@endsection
