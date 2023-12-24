<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateStagiaireRequest;
use App\Models\StagiaireModel;
use Illuminate\Http\Request;

class Stagiaire extends Controller
{
    public function formul(){
        return view('form');
    }


    public function addStag(Request $request)
    {
        ;

        $stagiaire = new StagiaireModel([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'section' => $request->input('section'),
            'image' => $request->input('image'),
        ]);
        $stagiaire->save();

        return view('form');
    }

    public function getStag(){

        $stagiaires = StagiaireModel::all();

        return view('stagiaires' , ['stagiaires' => $stagiaires]);
    }

    public function showStag($id)
    {
        $stagiaire = StagiaireModel::find($id);

        return view('showStag', ['stagiaire' => $stagiaire]);
    }

    public function editStag(StagiaireModel $stagiaireModel)
    {

        $stagiaire = $stagiaireModel;
        return view('editStag',compact('stagiaire'));
    }



    public function updateStag(UpdateStagiaireRequest $request,StagiaireModel $stagiaireModel){


       $s =  $stagiaireModel->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'section'=>$request->section
        ]);

        //dd($s);


        return $s? to_route('stagiaires'):back();

    }




    public function deleteStag(StagiaireModel $stagiaireModel)
    {

        $stagiaireModel->delete();

        return back();
    }




}
