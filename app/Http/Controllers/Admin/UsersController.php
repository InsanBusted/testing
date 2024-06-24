<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create',);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $employee = User::find($request->id);
            $employee->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);
        } else {
            User::create($data);
        }

        return redirect()->route('users.index');
    }

    public function delete(string $id)
    {
        $employee = User::find($id);
        $employee->delete();

        return redirect()->route('users.index');
    }

    public function edit(string $id)
    {
        $users = User::find($id);
        if (!$users) {
            return redirect()->back();
        }
        return view('admin.users.edit', compact('users'));
    }
}
