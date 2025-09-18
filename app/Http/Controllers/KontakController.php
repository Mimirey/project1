<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
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
