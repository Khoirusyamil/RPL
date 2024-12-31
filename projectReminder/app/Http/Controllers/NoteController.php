<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $note = Note::all();
        return view('note',['note'=>$note]);
    }
    public function create(Request $req)
    {
        $user = new Note();
        $user->note = $req->note;
        $user->save();

        $note = Note::all();

        return view('note', ['note' => $note]);

    }
    public function destroy($id): RedirectResponse
    {
        Note::find($id)->delete();
        return redirect(route('note.index'))->with('pesan', 'Data berhasil dihapus');
    }
}
