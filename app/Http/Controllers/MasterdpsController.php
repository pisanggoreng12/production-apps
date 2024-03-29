<?php

namespace App\Http\Controllers;

use App\Models\Masterdps;
use DateTime;
use Illuminate\Http\Request;


class MasterdpsController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $datarfid=Masterdps::where('dps','LIKE','%' .$request->search. '%')->paginate(5);
        }else{

        $datarfid= Masterdps::paginate(5);
        }
        //dd($datarfid[0]);
        return view('masterdps',compact('datarfid'));
    }

    public function tampilkandps($tag_rfid){

        $datarfid = Masterdps::find($tag_rfid);
        //dd($datarfid);

        return view('tampilmasterdps', compact('datarfid'));
    }

    // public function updatedps(Request $request, $tag_rfid){
    //     $datarfid = Masterdps::findOrFail($tag_rfid);
    //     //dd($datarfid);
    //     $datarfid->update($request->all());
    //     $datarfid['created_date']=DateTime('Y-m-d H:i:s');
    //     $datarfid['modified_date']=DateTime('Y-m-d H:i:s');
    //     $datarfid['created_by']=stringValue();
    //     $datarfid['modified_by']=stringValue();

    //     return redirect()->route('masterdps')->with('success','Data Berhasil Di Rubah');
    // }
    public function updatedps(Request $request, $tag_rfid){
            $datarfid = $request->all();
            $datarfid['modified_date'] = date('Y-m-d H:i:s');
            $datarfid['modified_by'] = 'ADMIN';
            $model = Masterdps::findOrFail($tag_rfid);
            $model->update($datarfid);
            

            return redirect()->route('masterdps')->with('success','Data Berhasil Di Rubah');


    }
}
