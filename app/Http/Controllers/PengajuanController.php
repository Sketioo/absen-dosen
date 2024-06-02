<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Pengajuan::all());
        return view ('dashboard.pengajuan.index', [
            'title' => 'Dashboard | Pengajuan',
            'pengajuan' => Pengajuan::all(),
            'users' => User::all()
        ]);
    }

    public function admin()
    {
        //
        // dd(Pengajuan::all());
        return view ('dashboard.pengajuan.admin', [
            'title' => 'Dashboard | Pengajuan',
            'pengajuan' => Pengajuan::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // dd(Auth::user()->id);
        return view ('dashboard.pengajuan.create', [
            'title' => 'Dashboard | Add Pengajuan',
            'pengajuan' => Pengajuan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'tanggal' => 'required|max:255',
            'jenis' => 'required|max:255',
        ]);

        Pengajuan::insert([
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'status' => 0,
            'users_id' => Auth::user()->id,
        ]);
        return redirect('/dashboard/pengajuan')->with('success', 'Pengajuan have been added!');
    }

    /**
     * Display the specified resource.
     */
    public function approve(string $id)
    {
        //
        Pengajuan::where('id', $id)->update([
            'status' => 1
        ]);
        return redirect('/dashboard/pengajuan-admin')->with('success', 'Pengajuan has been approved!');
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
        Pengajuan::destroy($id);
        return redirect('/dashboard/pengajuan')->with('success', 'Pengajuan has been deleted!');
    }
}
