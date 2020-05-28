<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
            'alamat' => 'required',
            'nik' => 'numeric|required|digits:16',
            'wa' => 'nullable|numeric|digits_between:10,13',  
            'avatar' => 'nullable|image|mimes:jpeg,png,gif,webp',
            'password' => 'required|min:8|confirmed'
        ]);
        $profil->role = $request['role'];
        $profil->name = $request['name'];
        $profil->email = $request['email'];
        $profil->alamat = $request['alamat'];
        $profil->nik = $request['nik'];
        $profil->password = Hash::make($request['password']);
        $profil->facebook = $request['facebook'];
        $profil->wa = $request['wa'];
        $profil->notif = "Harap Password untuk diganti !";
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
        return redirect('user')->with(['success' => 'Pesan Berhasil'] );
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
            'alamat' => 'required',
            'nik' => 'numeric|required|digits:16',
            'wa' => 'nullable|numeric|digits_between:10,13',
            'avatar' => 'nullable|image|mimes:jpeg,png,gif,webp',
            'facebook' => 'nullable'
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

    public function password(Request $request , $id){
        $data = User::find($id);
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data->password = Hash::make($request['password']);
        $data->notif = null;
        $data->save();
        Alert::success('Password Berhasil Di Ubah', 'Success');
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
