<?php

namespace App\Http\Controllers\admin;

use App\Models\Books;
use App\Models\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $genres = Genres::all();
        return view('admin.books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "title" => 'required|min:3',
            "isbn" => 'required|min:3',
            "deskripsi" => 'required|min:3',
            "penulis" => 'required|min:3',
            "penerbit" => 'required|min:3',
            "cover_img" => 'required|min:3',
            "genres_id" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $employee = Books::find($request->id);
            $employee->update([
                "title" => $request->title,
                "isbn" => $request->isbn,
                "deskripsi" => $request->deskripsi,
                "penulis" => $request->penulis,
                "penerbit" => $request->penerbit,
                "cover_img" => $request->cover_img,
                "genres_id" => $request->genres_id,
            ]);
        } else {
            Books::create($data);
        }

        return redirect()->route('books.index');
    }

    public function delete(string $id)
    {
        $employee = Books::find($id);
        $employee->delete();

        return redirect()->route('books.index');
    }

    public function edit(string $id)
    {
        $genres = Genres::all();
        $books = Books::find($id);
        if (!$books) {
            return redirect()->back();
        }
        return view('admin.books.edit', compact('books', 'genres'));
    }
}
