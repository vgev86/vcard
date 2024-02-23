<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DashboardController extends Controller
{
    public function all()
    {
        $users = User::whereRole(User::ROLE_USER)->get();
        return view('admin.user.all', compact('users'));
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function edit(Request $request)
    {
        $user = User::where('hashed_id', $request->id)->first();
        return view('admin.user.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'phone' => 'required|digits:5',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        $qrCode = QrCode::size(50)->generate(route('user.data', ['id' => $user->hashed_id]));

        Log::info('QR Code Data: ' . base64_encode($qrCode));

        $user->qrcode_path = $qrCode;
        $user->save();

        return redirect()->route('user.all')
            ->withSuccess('You have successfully registered & logged in!');
    }
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|string|max:250',
            'email' => [
                'required',
                'email',
                'max:250',
                Rule::unique('users')->ignore($request->id, 'hashed_id'),
            ],
            'phone' => 'required|digits:5',
        ]);

        $id = $request->id;

        User::where('hashed_id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('user.all');
    }

    public function delete(Request $request)
    {
        User::where('hashed_id', $request->id)->delete();

        return back();
    }

    public function data(Request $request)
    {
        $user = User::where('hashed_id', $request->id)->first();

        return view('admin.user.data', compact('user'));
    }

}
