<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pesan;
use App\User;
use App\m_web;
use Alert;

class c_pesan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_pesan::get();
        return view('admin/pesan' , compact('data'));
    }

    public function store(Request $request)
    {
        $data = new m_pesan;
        $request->validate([
            'namas' => 'required',
            'pemilik' => 'required',
            'email' => 'required'
        ]);
        $data->nama = $request['nama'];
        $data->email = $request['email'];
        $data->pesan = $request['pesan'];
        $data->save();
        Alert::success('Pesan Berhasil di Kirim', 'Success');
        return redirect('');
    }

    public function destroy($id)
    {
        $data = m_pesan::find($id);
        $data->delete();
        // $data->save();
        Alert::success('Data Berhasil di Hapus', 'Success');
        return redirect('pesan');
    }
}
