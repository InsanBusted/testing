<?php

namespace App\Http\Controllers\admin;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.members.create',);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'status' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $employee = Member::find($request->id);
            $employee->update([
                "name" => $request->name,
                "status" => $request->status,
                "alamat" => $request->alamat,
                "email" => $request->email,
                "gender" => $request->gender,
            ]);
        } else {
            Member::create($data);
        }

        return redirect()->route('members.index');
    }

    public function delete(string $id)
    {
        $employee = Member::find($id);
        $employee->delete();

        return redirect()->route('members.index');
    }

    public function edit(string $id)
    {
        $members = Member::find($id);
        if (!$members) {
            return redirect()->back();
        }
        return view('admin.members.edit', compact('members'));
    }
}
