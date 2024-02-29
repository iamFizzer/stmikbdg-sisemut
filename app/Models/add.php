<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class add extends Model
{
    public function getDosen($keyword)
    {
        return DB::table('dosens')->where('no_card',$keyword)->first();
    }
    public function postAntrian($data){
        return DB::table('antrians')->insert($data);
    }
    public function showMN()
    {
        
        $antrianMN = DB::table('antrians')->where('kd_dosen','MN')->where('tanggalBimbingan',Carbon::today()->toDateString())->where('sudah',0)->limit(2)->get();
        return $antrianMN;
    }
}
