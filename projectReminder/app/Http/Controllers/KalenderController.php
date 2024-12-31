<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\KalenderRequest;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kalender');
    }

    public function listKalender(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Kalender::where('start_date', '>=', $start)
        ->where('end_date', '<=', $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->title,
            'start' => $item->start_date,
            'end' => date('Y-m-d',strtotime($item->end_date.'+1 days')),
        ]);

        // return $events;
        return response()->json($events);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Kalender $kalender)
    {
        return view('kalender-form', ['data' => $kalender, 'action' => route('kalender.store')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KalenderRequest $request, Kalender $kalender)
    {
        return $this->update($request, $kalender);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalender $kalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalender $kalender)
    {
        \Log::info('Editing Kalender with ID: ' . $kalender->id);
        return view('kalender-form', [
            'data' => $kalender,
            'action' => route('kalender.update', $kalender->id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(KalenderRequest $request, Kalender $kalender)
    {
        if ($request->has('delete')){
            return $this->destroy($kalender);
        }
        $kalender->start_date = $request->start_date;
        $kalender->end_date = $request->end_date;
        $kalender->title = $request->title;

        $kalender->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Save Data Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalender $kalender)
    {
        $kalender->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Delete Data Successfully'
        ]);
    }
}
