<?php

namespace App\Http\Controllers;

use App\Models\JabatanPelamar;
use App\Models\Interview;
use Illuminate\Http\Request;
use App\Models\DataPelamar;

class JabatanPelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = JabatanPelamar::all();
        return view ('/listposisi',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $jabatan = JabatanPelamar::all();
        // return view('listposisi.create',["jabatan"=>$jabatan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'kode_jabatan'  => 'required',
        //     'jabatan'  => 'required',
        //     'deskripsi'  => 'required'
        // ]);

        // $jabatan = new JabatanPelamar();
        // $jabatan->jabatan = $validateData['jabatan'];

        // $jabatan->save();
        // return redirect()->route('listposisi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JabatanPelamar $jabatanPelamar)
    {
        // return view('listposisi.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JabatanPelamar $jabatanPelamar)
    {
        // return view('listposisi.edit',compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JabatanPelamar $jabatanPelamar)
    {
        // $rules=['jabatan'=>'required'];
        // $validatedData = $request->validate($rules);
        // JabatanPelamar::where('id',$jabatan->id)->update($validatedData);
        // return redirect()->route('listposisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JabatanPelamar $jabatanPelamar)
    {
        // JabatanPelamar::destroy($jabatan -> id);
        // return redirect()->route('listposisi.index');
    }
}
