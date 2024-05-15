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
        $users = User::where('role', 'user')->get();
        return view('admin.user.index', compact('users'));
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

    public function makeMitra(Request $request){
        $user = User::find($request->user_id);
        $user->role = $request->role;
        $user->save();

        return back();
    }
}
