<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Genre;

class BookController extends Controller
{
    public function index()
    {
        // $books = DB::select('SELECT * FROM books');
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $list_genres = Genre::all();
        $books = new Book();
        return view('admin.books.create', compact('books',['list_genres'=>$list_genres]));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "title" => 'required',
            "isbn" => 'required',
            "deskripsi" => 'required',
            "penulis" => 'required',
            "penerbit" => 'required',
            "cover_img" => 'required',
            "genres_id" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $books = Book::find($request->id);
            $books->update([
                "title" => $request->title,
                "isbn" => $request->isbn,
                "deskripsi" => $request->deskripsi,
                "penulis" => $request->penulis,
                "penerbit" => $request->penerbit,
                "cover_img" => $request->cover_img,
                "genres_id" => $request->genres_id,
            ]);
        } else {
            Book::create($data);
        }

        return redirect()->route('book.index');
    }

    public function delete(string $id)
    {
        $books = Book::find($id)->delete();

        return redirect()->route('book.index');
    }

    public function edit(string $id)
    {
        $list_genres = Genre::all();
        $books = Book::find($id);
        if (!$books) {
            return redirect()->back();
        }
        return view('admin.books.edit', compact('books',['list_genres'=>$list_genres]));
    }
}
