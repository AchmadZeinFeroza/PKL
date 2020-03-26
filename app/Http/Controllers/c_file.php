<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_berkas;
use Alert;
use File;

class c_file extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::allFiles(public_path('Berkas/'));
        return view('admin/berkas' , compact('files'));
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $file->move('Berkas/', $request->file('file')->getClientOriginalName());
    }
    public function show($id)
    {
        File::delete(public_path('Berkas').'/'.$id);
        Alert::success('Data Berhasil di Hapus', 'Success');
        $files = File::allFiles(public_path('Berkas/'));
        return redirect('file');
    }
}
