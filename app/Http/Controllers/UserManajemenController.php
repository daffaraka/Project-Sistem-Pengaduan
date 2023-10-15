<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManajemenController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('dashboard.users.user-index', $data);
    }

    public function create()
    {
        return view('dashboard.users.user-create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'unique:users,email',
            'nip' => 'required|unique:users,nip',
            'password' => 'required|confirmed',
            'password_confirmation' => 'same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'nip' => $request->nip,
            'status' => $request->status,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.users.user-edit',compact('user'));
    }

    public function update($id,Request $request)
    {

        $user = User::find($id);

        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required',
            'nip' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'same:password',
        ]);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nip' => $request->nip,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');

    }
}
