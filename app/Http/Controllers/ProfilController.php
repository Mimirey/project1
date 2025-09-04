<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        return view('beranda');
    }

    public function profil(){
        $data=[
            'nama'=> 'Myra Isadora',
            'kelas'=> 'XI PPLG 2',
            'sekolah'=> 'SMK Raden Umar Said Kudus',
            'title'=> 'Profil'
        ];
        return view('profil', $data);
    }

    public function kontak(){
        $data=[
            'wasap'=>'0822 5769 7764',
            'insta'=>'@myraeyrii',
            'secAcc'=>'@issador.aa',
            'git'=>'mimireyy',
            'title'=>'Kontak'
        ];
        return view ('kontak', $data);
    }
}
