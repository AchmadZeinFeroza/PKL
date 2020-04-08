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
        Alert::success('Kios Berhasil Di Tambah', 'Success');
        $data = m_kios::get();
        return redirect('kios');
    }

    public function getkecamatan(){
        $j = m_kios::where('kecamatan' , 2);
        $m = m_kios::where('kecamatan' , 3);
        $a = m_kios::where('kecamatan' , 1);
        $s = m_kios::where('kecamatan' , 4);
        return view('admin/daftar-kecamatan',  compact('j','m','a','s'));
    }

    public function hapus($id)
    {
        $data = m_kios::find($id);
        $data->delete();
        Alert::success('Data Berhasil di Hapus', 'Success');
        $data = m_kios::get();
        return redirect('kios');

    }

    public function tambah(Request $request)
    {
        $data = new m_kios;
        $request->validate([
            'pemilik' => 'required',
            'nama_kios' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'no_telpon' => 'required|numeric|digits_between:10,13',
            'kode' => 'numeric|required',
            'spjb' => 'required|numeric',
        ]);
        $data->pemilik = $request['pemilik'];
        $data->nama_kios = $request['nama_kios'];
        $data->alamat = $request['alamat'];
        $data->kecamatan = $request['kecamatan'];
        $data->desa = $request['desa'];
        $data->no_telpon = $request['no_telpon'];
        $data->kode = $request['kode'];
        $data->spjb = $request['spjb'];
        $data->save();
        Alert::success('Kios Berhasil Di Tambah', 'Success');
        return redirect('kios');
    }

    public function tampilkan($letter)
    {
        $data = m_kios::where('kecamatan' , $letter);
        return view('admin/detail-kecamatan' , compact('data')); 
    }

    public function store(Request $request)
    {
        $id = $request['id_regristasi'];
        $kios = new m_kios;
        $kios->pemilik = $request['pemilik'];
        $kios->nama_kios = $request['nama_kios'];
        $kios->alamat = $request['alamat'];
        $kios->kecamatan = $request['kecamatan'];
        $kios->no_telpon = $request['no_telpon'];
        $kios->desa = $request['desa'];
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
        $kecamatan = $data->first();
        return view('admin/detail-kecamatan' , compact('data' , 'kecamatan'));
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
    public function update(Request $request, $id)
    {
        $data = m_kios::find($id);
        $request->validate([
            'pemilik' => 'required',
            'nama_kios' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'no_telpon' => 'required|numeric|digits_between:10,13',
            'kode' => 'numeric|required',
            'spjb' => 'required|numeric|unique:kios',
        ]);
        $data->pemilik = $request['pemilik'];
        $data->nama_kios = $request['nama_kios'];
        $data->alamat = $request['alamat'];
        $data->kecamatan = $request['kecamatan'];
        $data->desa = $request['desa'];
        $data->no_telpon = $request['no_telpon'];
        $data->kode = $request['kode'];
        $data->spjb = $request['spjb'];
        $data->save();
        Alert::success('Kios Berhasil Di Ubah', 'Success');
        return redirect('kios');

    }
}
