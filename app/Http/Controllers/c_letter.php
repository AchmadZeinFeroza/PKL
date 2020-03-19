<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_kios;
use PDF;
use Alert;
use File;
use fpdi\FPDI;
use PdfMerger;

class c_letter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = m_kios::paginate(10);
        return view('admin/pembuatan-surat', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = m_kios::paginate(10);
        return view('admin/surat-penunjukan' , compact('data'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $id)
    {   
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    public function penunjukan($id)
    {
        $surat = m_kios::find($id);
        $pdf = PDF::loadview('penunjukan', compact('surat'))->setPaper('a4','potrait');
        return $pdf->download('surat-penunjukan.pdf');
        // $oMerger = PdfMerger::init();
        // $oMerger->addPDF(public_path('penunjukan/template/') . 'penunjukan.pdf', '2-8');
        // $oMerger->save(public_path('penunjukan/').'merged_result.pdf');
        // $file_path = public_path("penunjukan/Tes.pdf");
        // if (File::exists($file_path)) {
        //     File::delete($file_path);
        // }
        // return  $oMerger->save("Surat-Penunjukan.pdf", "download");
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

    public function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $romawi = array(
            1 => 'I' , 'II' , 'III' , 'IV' , 'V' , 'VI' , 'VII' , 'VIII' , 'IX' , 'X' , 'XI' , 'XII'
        );
        $tgl = array (
            1 => 'satu' , 'dua' , 'tiga' , 'empat' , 'lima' , 'enam' , 'tujuh' , 'delapan' , 'sembilan' , 'sepuluh' , 'sebelas' , 'dua belas' , 'tiga belas' , 'empat belas' ,
            'lima belas' , 'enam belas' , 'tujuh belas' , 'delapan belas' , 'sembilan belas' , 'dua puluh' , 'dua puluh satu' , 'dua puluh dua' , 'dua puluh tiga' , 'dua puluh empat' ,
            'dua puluh lima' , 'dua puluh enam' , 'dua puluh tujuh' , 'dua puluh delapan' , 'dua puluh sembilan' , 'tiga puluh' , 'tiga puluh satu'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[0] . '-' . $bulan[ (int)$pecahkan[1] ] . '-' . $tgl[ (int)$pecahkan[2] ] . '-' . $romawi[ (int)$pecahkan[1] ];
    }

    public function update(Request $request, $id)
    {
        $surat = m_kios::find($id);
        $tgl_angka = explode('-' , $request['tanggal']);
        $tgl = $request['tanggal'];
        $tanggal = explode('-' , self::tgl_indo($request['tanggal'])) ;
        $pdf = PDF::loadview('spjb' , compact('surat' , 'tanggal' , 'tgl_angka' , 'tgl'))->setPaper('a4', 'potrait')->save( public_path('spjb/').'Tes.pdf');
        $oMerger = PdfMerger::init();
        $oMerger->addPDF(public_path('spjb/').'Tes.pdf', 'all');
        $oMerger->addPDF(public_path('spjb/template/') . 'SPJB.pdf', '2-8');
        $oMerger->merge();
        $oMerger->save(public_path('spjb/').'merged_result.pdf');
        $file_path = public_path("spjb/Tes.pdf");
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        return  $oMerger->save("Surat-Pertanggung-Jawaban.pdf", "download");
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
