<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function profil(){
        $data=[
            'nama'=> 'Myra Isadora',
            'kelas'=> 'XI PPLG 2',
            'sekolah'=> 'SMK Raden Umar Said Kudus',
            'title'=> 'Profil'
        ];
        return view('profil', $data);
    }

   
}
