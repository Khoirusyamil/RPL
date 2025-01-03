<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalenderResultController extends Controller
{
    public function index()
    {
        // $kalender = DB::select('SELECT * FROM kalender');
        $kalenders = Kalender::all();

        return view('admin.kalender.index', compact('kalenders'));
    }

    public function create()
    {
        return view('admin.kalender.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "title" => 'required|string|max:255',
            "start_date" => 'required|date|date_format:Y-m-d',
            "end_date" => 'required|date|date_format:Y-m-d|after_or_equal:start_date'
        ]);

        if (isset($request->id)) {  
            # update
            $kalenders = Kalender::find($request->id);
            $kalenders->update([
                "title" => $request->title,
                "start_date" => $request->start_date,
                "end_date" => $request->end_date
            ]);
        } else {
            Kalender::create($data);
        }

        return redirect()->route('kalenders.index');
    }

    public function delete(string $id)
    {
        $kalenders = Kalender::find($id);
        $kalenders->delete();

        return redirect()->route('kalenders.index');
    }

    public function edit(string $id)
    {
        $kalenders = Kalender::find($id);
        if (!$kalenders) {
            return redirect()->back();
        }
        return view('admin.kalender.edit', compact('kalenders'));
    }
}
