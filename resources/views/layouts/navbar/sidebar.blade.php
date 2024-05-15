<div class="min-w-60 h-full p-10 bg-white flex-col justify-start items-center gap-12 inline-flex">

    <!--Menu bar-->
    <div class="flex-col justify-start items-start gap-6 inline-flex">
        <a href="{{ route('home') }}" class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-magnifying-glass-chart"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Dashboard</div>
        </a>

        {{-- mitra --}}
        @if (Auth::user()->role == 'mitra hotel')
            <a href="{{ route('management.hotel.index') }}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-hotel"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Hotel Room</div>
            </a>
        @endif
        @if (Auth::user()->role == 'mitra airline')
            <a href="{{ route('management.flight.index') }}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-plane-departure"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Flight Schedule</div>
            </a>
        @endif

        {{-- admin --}}
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('admin.user') }}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-users"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">User</div>
            </a>
            <a href="{{ route('admin.management.flight.index') }}"
                class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-hotel"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Hotel Room</div>
            </a>
            <a href="{{ route('admin.management.flight.index') }}"
                class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-plane-departure"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Flight Schedule</div>
            </a>
            <a href="{{ route('admin.saldo') }}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-money-bill"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Saldo</div>
            </a>
        @endif

        {{-- user --}}
        <a href="{{ route('history.hotel') }}" class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-hotel"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Booking Hotel</div>
        </a>
        <a href="{{ route('history.ticket') }}" class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-plane-departure"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Plane Tiket</div>
        </a>
        {{-- wallet user --}}
        <a href="{{ route('admin.saldo.history', Auth::user()->id) }}" class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-wallet"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Wallet</div>
        </a>
    </div>
</div>
