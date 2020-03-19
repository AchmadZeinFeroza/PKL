<?php

namespace App\Http\Controllers;

use App\m_kios;
use App\m_regristasi;
use App\m_penolakan;
use Illuminate\Http\Request;
use DataTables; 
use App\Imports\data_kios;
use Excel;
use Alert;
use Carbon\Carbon;

class c_kios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = m_kios::get();
        return view('admin/daftar-kios', compact('data'));
    }

    public function getkios(){
        $kios = m_kios::select('kios.*');
        return \DataTables::eloquent($kios)->toJson();
    }

    public function import(Request $request){
        Excel::import(new data_kios , $request->file('kios'));
    }

    public function getkecamatan(){
        $j = m_kios::where('kecamatan' , 'JENGGAWAH');
        $m = m_kios::where('kecamatan' , 'MUMBULSARI');
        $a = m_kios::where('kecamatan' , 'AJUNG');
        $s = m_kios::where('kecamatan' , 'SILO');
        return view('admin/daftar-kecamatan',  compact('j','m','a','s'));
    }

    public function hapus($id)
    {
        $data = m_kios::find($id);
        $data->delete();
        // $data->save();
        Alert::success('Data Berhasil di Hapus', 'Success');
        $data = m_kios::get();
        return view('admin/daftar-kios', compact('data'));

    }

    public function tampilkan($letter)
    {
        $data = m_kios::where('kecamatan' , $letter);
        return view('admin/detail-kecamatan' , compact('data')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request['id_regristasi'];
        $kios = new m_kios;
        $kios->pemilik = $request['pemilik'];
        $kios->nama_kios = $request['nama_kios'];
        $kios->alamat = $request['alamat'];
        $kios->kecamatan = $request['kecamatan'];
        $kios->no_telpon = $request['no_telpon'];
        $kios->save();
        $regristasi = m_regristasi::where('id_regristasi', $id)->first();
        $regristasi->delete();
        $penolakan = m_penolakan::get();
        $data = m_regristasi::get();
        Alert::success('Kios Berhasil Diverifikasi', 'Success');
        $kiosbaru = m_kios::whereDate('created_at', Carbon::today())->get();
        return view('admin/regristasi', compact('data', 'kiosbaru' , 'penolakan'));
    }

    public function kiosditolak(Request $request)
    {
        $id = $request['id_regristasi'];
        $regristasi = m_regristasi::where('id_regristasi', $id)->first();
        $kios = new m_penolakan;
        $kios->pemilik = $regristasi->pemilik;
        $kios->nama_kios = $regristasi->nama_kios;
        $kios->email = $regristasi->email;
        $kios->alamat = $regristasi->alamat;
        $kios->kecamatan = $regristasi->kecamatan;
        $kios->alasan = $request['alasan'];
        $kios->ktp = $regristasi->ktp;
        $kios->siup = $regristasi->siup;    
        $kios->tdp = $regristasi->tdp;
        $kios->save();
        $regristasi->delete();
        $penolakan = m_penolakan::whereDate('created_at', Carbon::today())->get();
        $data = m_regristasi::get();
        Alert::error('Kios Ditolak', 'Tidak Diterima');
        $kiosbaru = m_kios::whereDate('created_at', Carbon::today())->get();
        return view('admin/regristasi', compact('data', 'kiosbaru' , 'penolakan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_kios  $m_kios
     * @return \Illuminate\Http\Response
     */
    public function show($kio)
    {
        $data = m_kios::where('kecamatan' , $kio)->get();
        $kecamatan = $kio;
        return view('admin/detail-kecamatan' , compact('data' , 'kio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_kios  $m_kios
     * @return \Illuminate\Http\Response
     */
    public function edit(m_kios $m_kios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_kios  $m_kios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, m_kios $m_kios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_kios  $m_kios
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_kios $m_kios)
    {
        $data = m_kios::get();
    }

}
