<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/kelolaPengajuanTA');
    }

    public function detailPengajuan()
    {
        return view('admin/detailPengajuan');
    }
    public function kelolaTaMahasiswa()
    {
        return view('admin/kelolaTaMahasiswa');
    }
    public function listTa1Mahasiswa()
    {
        return view('admin/listTa1Mahasiswa');
    }
    public function listTa2Mahasiswa()
    {
        return view('admin/listTa2Mahasiswa');
    }
    public function detailTugasAkhir()
    {
        return view('admin/detailTugasAkhir');
    }
    public function kelolaPengajuanKP()
    {
        return view('admin/kelolaPengajuanKP');
    }
    public function listDataKpMahasiswa()
    {
        return view('admin/listDataKpMahasiswa');
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
