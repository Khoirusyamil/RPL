<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function index()
    {
        // $positions = DB::select('SELECT * FROM positions');
        $positions = Position::all();
        // foreach ($positions as $item) {
        //     dd($item->employees);
        // }
        // dd($positions);

        return view('admin.positions.index', compact('positions'));
    }

    public function create()
    {
        return view('admin.positions.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required|min:3'
        ]);

        if (isset($request->id)) {  
            # update
            $position = Position::find($request->id);
            $position->update([
                "nama" => $request->nama
            ]);
        } else {
            Position::create($data);
        }

        return redirect()->route('position.index');
    }

    public function delete(string $id)
    {
        $position = Position::find($id);
        $position->delete();

        return redirect()->route('position.index');
    }

    public function edit(string $id)
    {
        $position = Position::find($id);
        if (!$position) {
            return redirect()->back();
        }
        return view('admin.positions.edit', compact('position'));
    }
}
