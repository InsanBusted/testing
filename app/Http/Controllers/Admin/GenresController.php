<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index()
    {
        $genres = Genres::all();

        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            "name" => 'required|min:3'
        ]);

        if (isset($request->id)) {  
            # update
            $genres = Genres::find($request->id);
            $genres->update([
                "name" => $request->name
            ]);
        } else {
            Genres::create($data);
        }

        return redirect()->route('genres.index')->with('success', 'Berhasil Mengubah Data!');
    }

    public function delete(string $id)
    {
        $genres = Genres::find($id);
        $genres->delete();

        return redirect()->route('genres.index');
    }

    public function edit(string $id)
    {
        $genres = Genres::find($id);
        if (!$genres) {
            return redirect()->back();
        }
        return view('admin.genres.edit', compact('genres'));
    }
}
