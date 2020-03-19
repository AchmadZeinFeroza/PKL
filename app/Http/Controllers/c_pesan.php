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
        $data = new m_pesan;
        $data->nama = $request['nama'];
        $data->email = $request['email'];
        $data->pesan = $request['pesan'];
        $data->save();
        $data = m_web::get();
        $users = User::get();
        return view('index' , compact('data' , 'users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = m_pesan::find($id);
        $data->delete();
        // $data->save();
        Alert::success('Data Berhasil di Hapus', 'Success');
        $data = m_web::get();
        $data = m_pesan::get();
        return view('admin/pesan' , compact('data'));
    }
}
