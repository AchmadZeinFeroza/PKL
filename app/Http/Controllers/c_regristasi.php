<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_regristasi;
use App\m_kios;
use App\m_penolakan;
use App\m_web;
use App\User;
use Carbon\Carbon;
use Alert;

class c_regristasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penolakan = m_penolakan::get();
        $data = m_regristasi::get();
        $kiosbaru = m_kios::whereDate('created_at', Carbon::today())->get();
        return view('admin/regristasi', compact('data', 'kiosbaru' , 'penolakan'));
    }

    public function regristasi()
    {
        return view('regristasi');
    }

    public function getktp($id)
    {
        $show = m_regristasi::where('id_regristasi', $id)->first();
        return response()->json($show);
    }

    public function getsiup($id)
    {   
        $show = m_regristasi::where('id_regristasi', $id)->first();
        return response()->json($show);
    }

    public function gettdp($id)
    {   
        $show = m_regristasi::where('id_regristasi', $id)->first();
        return response()->json($show);
    }

    public function postRegristasi(Request $request){
        $data = new m_regristasi;
        $request->validate([
            'nama_kios' => 'required',
            'pemilik' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'no_telpon' => 'required',
            'ktp' => 'required|image|mimes:jpeg,png,gif,webp,pdf',
            'tdp' => 'required|image|mimes:jpeg,png,gif,webp,pdf',
            'siup' => 'required|image|mimes:jpeg,png,gif,webp,pdf'
        ]);
        $data->nama_kios = $request['nama_kios'];
        $data->pemilik = $request['pemilik'];
        $data->alamat = $request['alamat'];
        $data->no_telpon = $request['no_telpon'];
        $data->desa = $request['desa'];
        $data->kecamatan = $request['kecamatan'];
        $data->email = $request['email'];
        if($request->hasFile('ktp')){
            $request->file('ktp')->move('regristasii/ktp', $request->file('ktp')->getClientOriginalName());
            $data->ktp = $request->file('ktp')->getClientOriginalName();
        }
        if($request->hasFile('tdp')){
            $request->file('tdp')->move('regristasii/tdp', $request->file('tdp')->getClientOriginalName());
            $data->tdp = $request->file('tdp')->getClientOriginalName();
        }
        if($request->hasFile('siup')){
            $request->file('siup')->move('regristasii/siup', $request->file('siup')->getClientOriginalName());
            $data->siup = $request->file('siup')->getClientOriginalName();
        }
        $data->save();
        Alert::success('Data Kios Berhasil Dikirim', 'Success');
        $data = m_web::get();
        $users = User::get();
        return redirect('');
    }
}
