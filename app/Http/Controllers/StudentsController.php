<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=[
            [
                'id'=>123,
                'nama'=> 'Myra',
                'grade'=>'11 PPLG 2',
                'email'=>'myra@gmail.com',
                'address'=> 'Kos Permata Bunda gang 11'
            ],
            [
                'id'=>222,
                'nama'=> 'Ani',
                'grade'=>'11 PPLG 2',
                'email'=>'Ani@gmail.com',
                'address'=> 'Jl Bintang Utara'
            ],
            [
                'id'=>321,
                'nama'=> 'Geo',
                'grade'=>'11 PPLG 2',
                'email'=>'geovani@gmail.com',
                'address'=> 'Blok J Gang 18'
            ],
            [
                'id'=>432,
                'nama'=> 'Siska',
                'grade'=>'11 PPLG 2',
                'email'=>'siska@gmail.com',
                'address'=> 'Jalan Edelen'
            ],
            [
                'id'=>512,
                'nama'=> 'Kavioli',
                'grade'=>'11 PPLG 2',
                'email'=>'kavkav@gmail.com',
                'address'=> 'Gang J Jalan Asli Melati'
            ],
        ];
        return view('students',[
        'title' => "Students",
        'students'=>$students
    ]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
