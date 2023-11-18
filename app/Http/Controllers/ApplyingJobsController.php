<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerusahaanJobShare;
use App\Models\User;
use App\Models\ApplyingJobs;
use PDF;

class ApplyingJobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.company.pemohon.index', [
            'pemohons'=>ApplyingJobs::latest()->paginate(10),
            'jobs'=>PerusahaanJobShare::all(),
            'users'=>User::with('userProfile')->get()]);
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
        $validatedData=$request->validate([
            'job_id'=>'required',
            'user_id'=>'required'
        ]);
        
        ApplyingJobs::create($validatedData);
        return redirect('/pemohon')->with('pesan','Data Berhasil di Simpan');
    }

    public function export_pemohon()
    {
        $data['pemohons'] = ApplyingJobs::all();

        $pdf = Pdf::loadView('frontend.company.pdf.pemohon', $data);
        // return $pdf->download('pemohon.pdf');
        return $pdf->stream();
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
