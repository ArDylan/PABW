@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div class="bg-white rounded-lg shadow-md px-2 py-3">
        <div>
            <h1>Edit Schedule</h1>
        </div>
        <div>
            <form action="{{ route('admin.management.flight.update', $flightSchedule->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Flight Number</label>
                        <input type="text" name="flight_number" id="flight_number"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type Flight flight number" value="{{$flightSchedule->flight_number}}" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" name="price" id="price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="$2999" value="{{$flightSchedule->price}}" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="airline_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Airlines</label>
                        <select id="airline_id" name="airline_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            @foreach ($airlines as $dataAirline)
                                <option value="{{ $dataAirline->id }}" @if($flightSchedule->airline->id)@endif>{{ $dataAirline->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="total_seat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Seat</label>
                        <input type="number" name="total_seat" id="total_seat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="12" required="" value="{{$flightSchedule->total_seat}}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="flight_date"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Flight Date</label>
                        <input type="date" name="flight_date" id="flight_date"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="12" required="" value="{{$flightSchedule->flight_date}}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="departure"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departure</label>
                        <input type="time" name="departure" id="departure"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required="" value="{{$flightSchedule->departure}}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="arrival"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Arrival</label>
                        <input type="time" name="arrival" id="arrival"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required="" value="{{$flightSchedule->arrival}}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="from"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">From</label>
                        <input type="text" name="from" id="from"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required="Balikpapan" value="{{$flightSchedule->from}}">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="destination"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Destination</label>
                        <input type="text" name="destination" id="destination"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required="" value="{{$flightSchedule->destination}}">
                    </div>
                    <div class="col-span-2">
                        <label for="transit"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transit</label>
                        <input type="text" name="transit" id="transit"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{$flightSchedule->transit}}">
                    </div>
                </div>

                <button type="submit" class="p-3 bg-blue-600 text-white hover:bg-blue-800 rounded-lg shadow-lg">Submit</button>
            </form>
        </div>
    </div>
@endsection
