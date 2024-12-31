<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nim' => 'numeric',
            'rombel' => 'required',
            'dokumen' => 'required|mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx',
            'keterangan' => 'required',
            ]);
        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'DOC' .date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('dokumen/', $nama_dokumen);

        $data = new Task();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->nim = $request->nim;
        $data->rombel = $request->rombel;
        $data->dokumen = $nama_dokumen;
        $data->keterangan = $request->keterangan;
        $data->save();
        return view('home');
    }
}
