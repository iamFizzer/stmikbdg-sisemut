<?php

namespace App\Http\Controllers;

use App\Models\add;
use App\Models\antrian;
use App\Models\Dosen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KirimController extends Controller
{

    public function __construct()
    {
        $Dosen = new Dosen();
        
    }
    public function show() {
        $add = new add();
        $todayMN = $add->showMN();
        $jumlahMN = DB::table('antrians')->where('kd_dosen','MN')->where('tanggalBimbingan',Carbon::today()->toDateString())->where('sudah',0)->count();
        // dd($todayMN);
        return view('main.showAntrian',compact('todayMN','jumlahMN'));
    }
    public function kirim(Request $request)
    {   
        $add = new add();
        $keyword = $request->keyword;
        //cek keyword in database
        $getDosen = $add->getDosen($keyword);
        if ($getDosen == null){
            return redirect()->back()->with('Pesan','Data dosen tidak ditemukan');
        }else{
            return view('main.addAntrian',compact('getDosen'));
        }
        
    }

    public function tambahantrian(Request $request)
    {
        $add = new add();
        $cekslot = DB::table('antrians')->where('tanggalBimbingan', Carbon::today()->toDateString())->count();
        $cekslot2 = DB::table('antrians')->where('tanggalBimbingan', Carbon::tomorrow()->toDateString())->count();
        if ($cekslot > 10) {
            $tglbimbing = Carbon::tomorrow()->toDateString();
            $pesan = "Mohon Maaf Antrian Hari Ini Sudah Penuh .. Anda Masuk Ke antrian Di tanggal " . $tglbimbing;
        }elseif ($cekslot2 > 10) {
            $tglbimbing = Carbon::today()->addDays(2)->toDateString();
            $pesan = "Mohon Maaf Antrian Hari Ini Sudah Penuh .. Anda Masuk Ke antrian Di tanggal " . $tglbimbing;
        }else{
            $tglbimbing = Carbon::today()->toDateString();
            $pesan = "Selamat Anda Sudah Masuk Antrian Hari Ini.";
        }
        $data = [
            'id_dosen' =>$request->id_dosen,
            'kd_dosen' =>$request->kd_dosen,
            'nama_dosen' => $request->dosen,
            'nama_mhs' =>$request->nama,
            'nim' => $request->nim,
            'sudah' => 0,
            'tanggalBimbingan' => $tglbimbing,
        ];
            $add->postAntrian($data);
            // dd($pesan);
            return redirect('/')->with('Pesan',$pesan);
    }

    public function selesaiAntrian($id)
    {
        $antrian = antrian::find($id);
        $antrian->update(['sudah'=>1]);
        return back();
    }
}
