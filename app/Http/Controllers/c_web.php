<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_web;
use App\User;
use Alert;

class c_web extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_web::get();
        $users = User::get();
        return view('index' , compact('data' , 'users'));
    }

    public function web()
    {
        $data = m_web::get();
        return view('admin/pengelolaan-web' , compact('data'));
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
        $data = new m_web;
        $data->judul = $request['judul'];
        $data->deskripsi_1 = $request['deskripsi_1'];
        $data->deskripsi_2 = $request['deskripsi_2'];
        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('Content/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
        }
        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('Content/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
        }
        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('Content/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
        }
        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('Content/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
        }
        if($request->hasFile('foto_5')){
            $request->file('foto_5')->move('Content/', $request->file('foto_5')->getClientOriginalName());
            $data->foto_5 = $request->file('foto_5')->getClientOriginalName();
        }
        $request->validate([
            'foto_1' => 'image|mimes:jpeg,png,gif,webp',
            'foto_2' => 'image|mimes:jpeg,png,gif,webp',
            'foto_3' => 'image|mimes:jpeg,png,gif,webp',
            'foto_4' => 'image|mimes:jpeg,png,gif,webp',
            'foto_5' => 'image|mimes:jpeg,png,gif,webp'
        ]);
        $data->save();
        $data = m_web::get();
        return view('admin/pengelolaan-web' , compact('data'));
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
        $data = m_web::find($id);
        $data->judul = $request['judul'];
        $data->deskripsi_1 = $request['deskripsi_1'];
        $data->deskripsi_2 = $request['deskripsi_2'];
        $request->validate([
            'foto_1' => 'image|mimes:jpeg,png,gif,webp',
            'foto_2' => 'image|mimes:jpeg,png,gif,webp',
            'foto_3' => 'image|mimes:jpeg,png,gif,webp',
            'foto_4' => 'image|mimes:jpeg,png,gif,webp',    
            'foto_5' => 'image|mimes:jpeg,png,gif,webp'
        ]);
        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('Content/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
        }
        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('Content/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
        }
        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('Content/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
        }
        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('Content/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
        }
        if($request->hasFile('foto_5')){
            $request->file('foto_5')->move('Content/', $request->file('foto_5')->getClientOriginalName());
            $data->foto_5 = $request->file('foto_5')->getClientOriginalName();
        }
        $data->save();
        $data = m_web::get();
        Alert::success('Data Berhasil di Ubah', 'Success');
        return view('admin/pengelolaan-web' , compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = m_web::find($id)->delete();
        Alert::success('Data Berhasil di Hapus', 'Success');
        // $data->save();
        $data = m_web::get();
        return view('admin/pengelolaan-web' , compact('data'));
    }
}
