<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskResultController extends Controller
{
    public function index()
    {
        // $task = DB::select('SELECT * FROM task');
        $tasks = Task::all();

        return view('admin.task.index', compact('tasks'));
    }

    public function create()
    {
        return view('admin.task.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "name" => 'required|string|max:255',
            "email" => 'required|email|max:255|unique:users,email',
            "nim" => 'required|string|max:20',
            "rombel" => 'required|string|max:50',
            "dokumen" => 'required|mimes:doc,docx,pdf,xls,xlsx,ppt,pptx', 
            "keterangan" => 'nullable|string|max:500'
        ]);

        $dokumen = $request->file('dokumen');
        $nama_dokumen = 'DOC' .date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
        $dokumen->move('dokumen/', $nama_dokumen);

        if (isset($request->id)) {  
            # update
            $tasks = Task::find($request->id);
            $tasks->update([
                "name" => $request->name,
                "email" => $request->email,
                "nim" => $request->nim,
                "rombel" => $request->rombel,
                "dokumen" => $nama_dokumen,
                "keterangan" => $request->keterangan
            ]);
        } else {
            Task::create($data);
        }

        return redirect()->route('tasks.index');
    }

    public function delete(string $id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect()->route('tasks.index');
    }

    public function edit(string $id)
    {
        $tasks = Task::find($id);
        if (!$tasks) {
            return redirect()->back();
        }
        return view('admin.task.edit', compact('tasks'));
    }
}
