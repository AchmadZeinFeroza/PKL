<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_web;
use App\User;
use App\m_url;
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
        $url = m_url::get();
        $data = m_web::get();
        $users = User::get();
        return view('index' , compact('data' , 'users' , 'url'));
    }

    public function web()
    {
        $data = m_web::get();
        $url = m_url::get();
        return view('admin/pengelolaan-web' , compact('data' , 'url'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function url(Request $request ,$id)
    {
        $data = m_url::find($id);
        $request->validate([
            'wa' => 'numeric|min:8|max:13',
            'no_perusahaan' => 'numeric|min:8|max:13'
        ]);
        $data->facebook = $request['facebook'];
        $data->instagram = $request['instagram'];
        $data->twitter = $request['twitter'];
        $data->wa = $request['wa'];
        $data->no_perusahaan = $request['no_perusahaan'];
        $data->save();
        Alert::success('Url Berhasil di Ubah', 'Success');
        return redirect('web');
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
        $request->validate([
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'judul' => 'required',
            'foto_1' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_2' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_3' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_4' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_5' => 'required|image|mimes:jpeg,png,gif,webp'
        ]);
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
        
        $data->save();
        $data = m_web::get();
        return redirect('web');
    }

    public function update(Request $request, $id)
    {
        $data = m_web::find($id);
        $request->validate([
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'judul' => 'required',
            'foto_1' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_2' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_3' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_4' => 'required|image|mimes:jpeg,png,gif,webp',
            'foto_5' => 'required|image|mimes:jpeg,png,gif,webp'
        ]);
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
        $data->save();
        $data = m_web::get();
        Alert::success('Data Berhasil di Ubah', 'Success');
        return redirect('web');

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
        return redirect('web');
    }
}
