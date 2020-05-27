<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request; 
use App\m_kios;
use App\m_surat;
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
        $user =  Auth::user();
        return view('admin/pembuatan-surat', compact('data','user'));
    }

    public function create()
    {
        $data = m_kios::paginate(10);
        return view('admin/surat-penunjukan' , compact('data'));   
    }

    
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
        $year =  array(
            1 => 'satu' , 'dua' , 'tiga' , 'empat' , 'lima' , 'enam' , 'tujuh' , 'delapan' , 'sembilan' , 'sepuluh' , 'sebelas' , 'dua belas' , 'tiga belas' , 'empat belas' ,
            'lima belas' , 'enam belas' , 'tujuh belas' , 'delapan belas' , 'sembilan belas' , 'dua puluh' , 'dua puluh satu' , 'dua puluh dua' , 'dua puluh tiga' , 'dua puluh empat' ,
            'dua puluh lima' , 'dua puluh enam' , 'dua puluh tujuh' , 'dua puluh delapan' , 'dua puluh sembilan' , 'tiga puluh' , 'tiga puluh satu' , 'tiga puluh dua' , 'tiga puluh tiga' ,
            'tiga puluh empat' , 'tiga puluh lima' , 'tiga puluh enam' , 'tiga puluh tujuh' , 'tiga puluh delapan' , 'tiga puluh sembilan' , 'empat puluh' , 'empat puluh satu' , 'empat puluh dua' , 'empat puluh empat' ,
            'empat puluh empat' , 'empat puluh lima' , 'empat puluh enam' , 'empat puluh tujuh' , 'empat puluh delapan' , 'empat puluh sembilan' , 'lima puluh' , 'lima puluh satu' , 'lima puluh dua' , 'lima puluh lima' ,
            'lima puluh empat' , 'lima puluh lima' , 'lima puluh enam' , 'lima puluh tujuh' , 'lima puluh delapan' , 'lima puluh sembilan' , 'enam puluh' , 'enam puluh satu' , 'enam puluh dua' , 'enam puluh enam' ,
            'enam puluh empat' , 'enam puluh lima' , 'enam puluh enam' , 'enam puluh tujuh' , 'enam puluh delapan' , 'enam puluh sembilan' , 'tujuh puluh' , 'tujuh puluh satu' , 'tujuh puluh dua' , 'tujuh puluh tujuh' ,
            'tujuh puluh empat' , 'tujuh puluh lima' , 'tujuh puluh enam' , 'tujuh puluh tujuh' , 'tujuh puluh delapan' , 'tujuh puluh sembilan' , 'delapan puluh' , 'delapan puluh satu' , 'delapan puluh dua' , 'delapan puluh delapan' ,
            'delapan puluh empat' , 'delapan puluh lima' , 'delapan puluh enam' , 'delapan puluh tujuh' , 'delapan puluh delapan' , 'delapan puluh sembilan' , 'sembilan puluh' , 'sembilan puluh satu' , 'sembilan puluh dua' , 'sembilan puluh sembilan' ,
            'sembilan puluh empat' , 'sembilan puluh lima' , 'sembilan puluh enam' , 'sembilan puluh tujuh' , 'sembilan puluh delapan' , 'sembilan puluh sembilan' 
        );
        $tgl = array (
            1 => 'satu' , 'dua' , 'tiga' , 'empat' , 'lima' , 'enam' , 'tujuh' , 'delapan' , 'sembilan' , 'sepuluh' , 'sebelas' , 'dua belas' , 'tiga belas' , 'empat belas' ,
            'lima belas' , 'enam belas' , 'tujuh belas' , 'delapan belas' , 'sembilan belas' , 'dua puluh' , 'dua puluh satu' , 'dua puluh dua' , 'dua puluh tiga' , 'dua puluh empat' ,
            'dua puluh lima' , 'dua puluh enam' , 'dua puluh tujuh' , 'dua puluh delapan' , 'dua puluh sembilan' , 'tiga puluh' , 'tiga puluh satu'
        );
        $pecahkan = explode('-', $tanggal);
        $tahun = substr($pecahkan[0] , 2);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[0] . '-' . $bulan[ (int)$pecahkan[1] ] . '-' . $tgl[ (int)$pecahkan[2] ] . '-' . $romawi[ (int)$pecahkan[1] ] . '-' . $year[ (int)$tahun ];
    }
    public function hari($hari){
        $day = date("D" , $hari);
     
        switch($day){
            case 'Sun':
                $hari = "Minggu";
            break;
     
            case 'Mon':			
                $hari = "Senin";
            break;
     
            case 'Tue':
                $hari = "Selasa";
            break;
     
            case 'Wed':
                $hari = "Rabu";
            break;
     
            case 'Thu':
                $hari = "Kamis";
            break;
     
            case 'Fri':
                $hari = "Jumat";
            break;
     
            case 'Sat':
                $hari = "Sabtu";
            break;
            
            default:
                $hari = "Tidak di ketahui";		
            break;
        }
     
        return $hari;
     
    }

    public function penunjukan(Request $request,$id)
    {
        $surat = m_kios::find($id);
        $request->validate([
            'tanggal' => 'required',
        ]);
        $surat->user_penunjukan = $request['user'];
        $surat->cetak_penunjukan += 1;
        $surat->save();
        $hari = self::hari(strtotime($request['tanggal']));
        $tgl_angka = explode('-' , $request['tanggal']);
        $tgl = date("d-m-Y", strtotime($request['tanggal']));
        $tanggal = explode('-' , self::tgl_indo($request['tanggal'])) ;
        $pdf = PDF::loadview('penunjukan' , compact('surat' , 'tanggal' , 'tgl_angka' , 'tgl' ,'hari'))->setPaper('a4', 'potrait')->save( public_path('spjb/').'Tes.pdf');
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


    public function update(Request $request, $id)
    {
        $surat = m_kios::findOrFail($id);
        $request->validate([
            'tanggal' => 'required',
        ]);
        $surat->user_spjb = $request['user'];
        $surat->cetak_spjb += 1;
        $surat->save();
        $tgl_angka = explode('-' , $request['tanggal']);
        $tgl = date("d-m-Y", strtotime($request['tanggal']));
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

  
}
