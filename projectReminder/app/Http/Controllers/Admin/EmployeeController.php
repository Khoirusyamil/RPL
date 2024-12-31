<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Position;


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
        $list_positions = Position::all();
        $employees = new Employee();
        return view('admin.employees.create', compact('employees',['list_positions'=>$list_positions]));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required',
            "email" => 'required',
            "nohp" => 'required',
            "alamat" => 'required',
            "positions_id" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $employees = Employee::find($request->id);
            $employees->update([
                "nama" => $request->nama,
                "email" => $request->email,
                "nohp" => $request->nohp,
                "alamat" => $request->alamat,
                "positions_id" => $request->positions_id,
            ]);
        } else {
            Employee::create($data);
        }

        return redirect()->route('employee.index');
    }

    public function delete(string $id)
    {
        $employees = Employee::find($id)->delete();

        return redirect()->route('employee.index');
    }

    public function edit(string $id)
    {
        $list_positions = Position::all();
        $employees = Employee::find($id);
        if (!$employees) {
            return redirect()->back();
        }
        return view('admin.employees.edit', compact('employees',['list_positions'=>$list_positions]));
    }
}
