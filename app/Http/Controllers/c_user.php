<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Alert;

class c_user extends Controller
{
    public function index(){
        $data = User::get();
        return view('admin/daftar-admin',compact('data'));
    }
    public function store(Request $request){
        $profil = new User;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'alamat' => 'required',
            'nik' => 'numeric|required',
            'wa' => 'numeric|min:8|max:13',  
            'avatar' => 'required|image|mimes:jpeg,png,gif,webp'
        ]);
        $profil->role = $request['role'];
        $profil->name = $request['name'];
        $profil->email = $request['email'];
        $profil->alamat = $request['alamat'];
        $profil->nik = $request['nik'];
        $profil->facebook = $request['facebook'];
        $profil->wa = $request['wa'];
        $profil->password = Hash::make($request['password']);
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('profil/', $request->file('avatar')->getClientOriginalName());
            $profil->avatar = $request->file('avatar')->getClientOriginalName();
        }
        // $request->validate([
        //     'avatar' => 'image|mimes:jpeg,png,gif,webp'
        // ]);
        $profil->save();
        Alert::success('Data User Berhasil Di Tambah', 'Success');
        $data = User::get();
        return redirect('user');
    }

    public function showdata($id)
    {
        $show = User::where('id', $id)->first();
        return response()->json($show);
    }

    public function update(Request $request , $id)
    {
        $data = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'alamat' => 'required',
            'nik' => 'numeric|required',
            'wa' => 'numeric|min:8|max:13',
            'avatar' => 'required|image|mimes:jpeg,png,gif,webp'
        ]);
        $data->role = $request['role'];
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->alamat = $request['alamat'];
        $data->nik = $request['nik'];
        $data->facebook = $request['facebook'];
        $data->wa = $request['wa'];
        $data->password = Hash::make($request['password']);
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('profil/', $request->file('avatar')->getClientOriginalName());
            $data->avatar = $request->file('avatar')->getClientOriginalName();
        }
        $data->save();
        Alert::success('Data User Berhasil Di Ubah', 'Success');
        $data = User::get();
        return redirect('user');

    }

    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        Alert::success('Data User Berhasil Di Hapus', 'Success');
        $data = User::get();
        return redirect('user');
    }

}
