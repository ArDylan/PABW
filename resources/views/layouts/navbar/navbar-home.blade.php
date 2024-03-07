<nav class="bg-blue-500 w-full z-20 fixed">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex flex-col gap-1 items-start justify-center shrink-0 relative">
            <div class="text-[#ffffff] text-left font-['Inter-Bold',_sans-serif] text-xl font-bold relative">
                BOOMS </div>
            <div class="text-[#ffffff] text-left font-['Inter-Regular',_sans-serif] text-[8px] font-normal relative">
                Booking &amp; Flights </div>
        </div>
        <div class="flex md:order-2 space-x-2 md:space-x-5 rtl:space-x-reverse">
            @if (Auth::user())
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @else
                <div
                    class="rounded border-solid bordbg-gray-100 border pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row gap-2 items-center justify-center shrink-0 relative">
                    <a href="/login"
                        class="text-[#ffffff] text-left font-['Inter-Regular',_sans-serif] text-[10px] font-normal relative">
                        Login </a>
                </div>
                <div
                    class="bg-[#ffffff] rounded pt-3 pr-[18px] pb-3 pl-[18px] flex flex-row gap-2 items-center justify-center shrink-0 relative">
                    <a href="/register"
                        class="text-[#000000] text-left font-['Inter-Regular',_sans-serif] text-[10px] font-normal relative">
                        Sign up </a>
                </div>
            @endif
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-indigo-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('home.hotel') }}"
                        class="block py-2 px-3 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-indigo-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Booking
                        Hotel</a>
                </li>
                <li>
                    <a href="{{ route('home.plane') }}"
                        class="block py-2 px-3 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-700 md:p-0 md:dark:hover:text-indigo-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Flights
                        Ticket</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
