<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SitusController extends Controller
{
    /**
    * Show the profile for a given siswa.
    *
    * @param  int  $id
    * @return \Illuminate\View\View
    */
    // select, join, where
    public function absen()
    {
        $absen = DB::table('absen')
        ->join('semester', 'absen.id_semester', '=', 'semester.id_semester')
        ->select('absen.*', 'semester.status')
        ->where('absen', '=', 'A')
        ->get();

        return view('absen', ['absen' => $absen]);
    }

    // select
    public function kelas()
    {
        $kelas = DB::table('kelas')
        ->select('*')
        ->get();

        return view('kelas', ['kelas' => $kelas]);
    }

    // select like
    public function semester()
    {
        $semester = DB::table('semester')
        ->select('*')
        ->where('status', 'like', '%a%')
        ->get();

        return view('semester', ['semester' => $semester]);
    }

    // select join
    public function siswa()
    {
        $siswa = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
        ->select('siswa.*', 'kelas.kelas')
        ->get();

        return view('siswa', ['siswa' => $siswa]);
    }
}
