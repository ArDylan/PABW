<div class="min-w-60 h-full p-10 bg-white flex-col justify-start items-center gap-12 inline-flex">

    <!--Menu bar-->
    <div class="flex-col justify-start items-start gap-6 inline-flex">
        <a href="{{route('home')}}" class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-magnifying-glass-chart"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Dashboard</div>
        </a>

        {{-- mitra --}}
        @if (Auth::user()->role == "mitra")
            <a href="{{route('management.flight.index')}}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-hotel"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Hotel Room</div>
            </a>
            <a href="{{route('management.flight.index')}}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-plane-departure"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Flight Tiket</div>
            </a>
        @endif

        {{-- admin --}}
        @if (Auth::user()->role == "admin")
            <a href="{{route('admin.user')}}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-users"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">User</div>
            </a>
            <a href="{{route('admin.management.flight.index')}}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-hotel"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Hotel Room</div>
            </a>
            <a href="{{route('admin.management.flight.index')}}" class="justify-start items-center gap-[26px] inline-flex">
                <i class="fa-solid fa-plane-departure"></i>
                <div class="text-zinc-400 text-lg font-medium font-['Inter']">Flight Schedule</div>
            </a>
        @endif

        <button class="justify-start items-center gap-[26px] inline-flex">
            <i class="fa-solid fa-gear"></i>
            <div class="text-zinc-400 text-lg font-medium font-['Inter']">Setting</div>
        </button>
    </div>
</div>
