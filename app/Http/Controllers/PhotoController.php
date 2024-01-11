<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donnees = [
           [ 'nom' => 'sahli',
            'prenom' => 'nour',
            'email' => 'nour@gmail.com',]
           
        ];

        return view('show',['users'=>$donnees]);
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('StagiaireCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
       // dd($request);
       /* $validated = $request->validate([
            'nom'=>'required | max:2',
            'email'=>'required | max:25',
        ]);
        dd($validated);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        return'je suis stagiaire';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }

    public function majorant(){
        return'je suis majorant';
    }

}
