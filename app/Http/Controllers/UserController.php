<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('user/dashboard');
    }

    public function pengajuanTugasAkhir()
    {
        return view('user/pengajuanTugasAkhir');
    }

    public function ajukanTugasAkhir()
    {
        return view('user/ajukanTugasAkhir');
    }

    public function proposalTugasAkhir()
    {
        return view('user/proposalTugasAkhir');
    }
    public function hasilTugasAkhir()
    {
        return view('user/hasilTugasAkhir');
    }
    public function pengajuanKerjaPraktik()
    {
        return view('user/pengajuanKerjaPraktik');
    }
    public function pendataanKerjaPraktik()
    {
        return view('user/pendataanKerjaPraktik');
    }
    public function notification()
    {
        return view('user/notification');
    }
    public function helpCenter()
    {
        return view('user/helpCenter');
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
