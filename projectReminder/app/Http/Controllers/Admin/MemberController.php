<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index()
    {
        // $members = DB::select('SELECT * FROM members');
        $members = Member::all();
        // foreach ($members as $item) {
        //     dd($item->employees);
        // }
        // dd($members);

        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        $member = new Member();
        return view('admin.members.create',compact('members'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "nama" => 'required|min:3',
            "email" => 'required',
            "status" => 'required',
            "alamat" => 'required',
            "gender" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $member = Member::find($request->id);
            $member->update([
                "nama" => $request->nama,
                "email" => $request->email,
                "status" => $request->status,
                "alamat" => $request->alamat,
                "gender" => $request->gender,
            ]);
        } else {
            Member::create($data);
        }

        return redirect()->route('member.index');
    }

    public function delete(string $id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('member.index');
    }

    public function edit(string $id)
    {
        $member = Member::find($id);
        if (!$member) {
            return redirect()->back();
        }
        return view('admin.members.edit', compact('member'));
    }
}
