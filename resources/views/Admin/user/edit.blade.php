@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div class="bg-white rounded-lg shadow-md px-2 py-3">
        <div>
            <h1>Form Edit User - {{ $user->name }}</h1>
        </div>
        <div>
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5 flex flex-row gap-3">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 my-auto">Name</label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="john doe" value="{{$user->name}}" required />
                </div>
                <div class="mb-5 flex flex-row gap-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 my-auto">Email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="name@flowbite.com" value="{{$user->email}}" required />
                </div>
                <div class="mb-5 flex flex-row gap-3">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 my-auto">Phone</label>
                    <input type="number" id="phone" name="phone"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="08122347" value="{{$user->phone}}" required />
                </div>

                <button type="submit" class="p-3 bg-blue-600 text-white hover:bg-blue-800 rounded-lg shadow-lg">Submit</button>
            </form>
        </div>
    </div>
@endsection
