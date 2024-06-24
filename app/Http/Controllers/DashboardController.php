<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dashboard";
        $nama = "Ibrahim Muhammad Faqihuddin";
        $nim = "0110223194";
        $dataPribadi = [
            [
                'nama' => $nama,
                'nim' => $nim
            ],
            [
                'nama' => "Perdi Satriama",
                'nim' => 0110223174
            ]
        ];
        // dd($dataPribadi);
        return view('dashboard.index', [
            'title' => $title,
            'dataPribadi' => $dataPribadi
        ]);
    }

    public function laporan(){
        $title = 'LAPORAN PROGRAM STUDI';
        $tahun = 2024;
        $data_mhs = [
            ["prodi" => "TI", "jumlah" => "1215"],
            ["prodi" => "SI", "jumlah" => "1020"],
            ["prodi" => "BD", "jumlah" => "62"],
        ];

        return view('dashboard.laporan', compact('title', 'tahun', 'data_mhs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
