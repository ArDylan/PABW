<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'role' => 'required',
        //     'phone' => 'required',
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'password' => Hash::make('12345678'),
        ]);

        return back();
    }
}
