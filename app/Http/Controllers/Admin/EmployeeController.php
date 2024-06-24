<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = DB::select('SELECT * FROM employees');
        $employees = Employee::all();

        return view('admin.employees.index', compact('employees'));
    }

    public function create()
    {
        $positions = Position::all();
        return view('admin.employees.create', compact('positions'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required|min:3',
            "email" => 'required|min:3',
            "alamat" => 'required|min:3',
            "nohp" => 'required|min:3',
            "position_id" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $employee = Employee::find($request->id);
            $employee->update([
                "nama" => $request->nama,
                "email" => $request->email,
                "alamat" => $request->alamat,
                "nohp" => $request->nohp,
                "position_id" => $request->position_id,
            ]);
        } else {
            Employee::create($data);
        }

        return redirect()->route('employees.index');
    }

    public function delete(string $id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }

    public function edit(string $id)
    {
        $positions = Position::all();
        $employees = Employee::find($id);
        if (!$employees) {
            return redirect()->back();
        }
        return view('admin.employees.edit', compact('employees', 'positions'));
    }
}