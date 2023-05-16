<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class c1 extends Controller
{
    // afficher les module
    public function getDataFromDB(){
        $m=DB::select('select * from module');
        return view('readData',["modules"=>$m]);

    }
    // afficher form de ajouter new modul
    public function getFormAddModule(){
        return view('ajouterModule');
    }
    // submit new module dans la base de donnée
    public function InsertNewModule(Request $request){
        $request->validate([
            'titrem'=>'required',
            'mh'=>"required"
        ]);
        $maxCodeM = DB::table('module')->count('codeM');
        $newCodeM = $maxCodeM + 1;
        $titre=$request->titrem;
        $mh=$request->mh;


        DB::insert('insert into module ( codeM,Titre,MH) values (?,?, ?)', [$newCodeM,$titre, $mh]);
        return redirect('/');
    }
    // form pour update module
    public function FormUpdateModule($code){
        $m=DB::select('select * from module where codeM=?',[$code]);
        return view('updateModuleForm',["module"=>$m]);
    }

    // save module after update
    public function saveUpdateModule(Request $request){
        $request->validate([
            'codem'=>'required',
            'titrem'=>'required',
            'mh'=>"required"
        ]);
        $codem=$request->codem;
        $titre=$request->titrem;
        $mh=$request->mh;
        DB::update('UPDATE module SET Titre=?,MH=? where codeM = ?', [$titre,$mh,$codem]);
        return redirect('/');
    }

    // pour delete un module 
    public function deleteModule($code){
        DB::delete('DELETE from module where codeM = ?', [$code]);
        DB::update('UPDATE module SET codeM = codeM -1 where codeM>?',[$code]);
        //DB::statement('ALTER TABLE module AUTO_INCREMENT = 1');
        return redirect('/');

    }
}

