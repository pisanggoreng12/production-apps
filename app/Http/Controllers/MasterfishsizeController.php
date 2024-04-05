<?php

namespace App\Http\Controllers;

use App\Models\Masterfishsize;
use Illuminate\Http\Request;

class MasterfishsizeController extends Controller
{
    public function index(){
        $datafishsize = Masterfishsize ::all();
        //dd($datafishsize);
        return view('masterfishsize',compact('datafishsize'));
    }

    public function tambahdatamasterfishsize(){
        return view('tambahdatamasterfishsize');
    }

    public function insertdatamasterfishsize(Request$request){
        //dd($request->all());
        //Masterfishsize::create($request->all());
        $datafishsize = $request->all();
        $datafishsize['created_date'] = date('Y-m-d H:i:s');
        $datafishsize['created_by'] = 'ADMIN';
        $model = Masterfishsize::create($datafishsize);
        return redirect()->route('masterfishsize')->with('success','Data Berhasil Di Tambahkan');
    }
}
