<?php

namespace App\Http\Controllers;

use App\m_kios;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class c_dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kios = m_kios::get();
        $user = User::get();
        $result = DB::select('SELECT created_at FROM kios
        WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)');
        $hari = [];
        $senin = 0;
        $selasa = 0;
        $rabu = 0;
        $kamis = 0;
        $jumat = 0;
        $sabtu = 0;
        $minggu = 0;
        foreach($result as $hasil){
            switch (date('D' , strtotime($hasil->created_at))){
                case "Mon":
                    $senin++;
                break;
                case "Tue":
                    $selasa++;
                break; 
                case "Wed":
                    $rabu++;
                break; 
                case "Thu":
                    $kamis++;
                break; 
                case "Fri":
                    $jumat++;
                break; 
                case "Sat":
                    $sabtu++;
                break; 
                case "Sun":
                    $minggu++;
                break; 
            };
        }
        // dd(date('D' , strtotime($s)));
        return view('admin/dashboard' , compact('kios' , 'user', 'senin' , 'selasa' , 'rabu' , 'kamis' , 'jumat' , 'sabtu' , 'minggu' ));
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
        //
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
        //
    }
}
