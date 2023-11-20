<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanJobShare;

class LowonganPerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.company.lowongan.index', ['lowongans'=>PerusahaanJobShare::latest()->paginate(10)]);
        // return view('frontend.company.lowongan.index');
    }

    public function index2()
    {
        // return view('frontend.company.dash', ['lowongan'=>LowonganPerusahaan::latest()->paginate(10)]);
        return view('frontend.company.dash');
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
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
        ]);
    
        // Simpan data buku ke database
        LowonganPerusahaan::create($validatedData);
        return redirect('/perusahaan-lowongan')->with('pesan','Data Berhasil di Simpan');
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
        return view('frontend.company.lowongan.index',[
            'lowongans'=>LowonganPerusahaan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
            
        ]);

        LowonganPerusahaan::where('id',$id)->update($validatedData);
        return redirect('/perusahaan-lowongan')->with('pesan','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LowonganPerusahaan::destroy ($id);
        return redirect('/perusahaan-lowongan')->with('pesan', 'Data berhasil dihapus');
    }
}
