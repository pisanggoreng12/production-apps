<?php

namespace App\Http\Controllers;

use App\Exports\PreparationExport;
use App\Models\Preparation;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpParser\Node\Stmt\Return_;

class PreparationController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Preparation::where('productionid','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Preparation::paginate(5);
        }

        return view('datapreparation',compact('data'));
    }

    public function tambahdataprep(){
        return view('tambahdataprep');
    }
    public function insertdataprep(Request$request){
        //dd($request->all());
        Preparation::create($request->all());
        return redirect()->route('preparation')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandataprep($productionid){

        $data = Preparation::find($productionid);
        //dd($data);

        return view('tampildataprep',compact('data'));
    }

    public function updatedataprep(Request $request, $productionid){
        $data = Preparation::findOrFail($productionid);
        $data->update($request->all());
        return redirect()->route('preparation')->with('success','Data Berhasil Di Update');
    }

    public function deletedataprep($productionid){
        $data = Preparation::findOrFail($productionid);
        $data->delete();
        return redirect()->route('preparation')->with('success','Data Berhasil Di Hapus');
    }

    public function exportpdfprep(){
        $data = Preparation::all();
        //$data = Preparation::where()->limit(1)->get()

        view()->share('data',$data);
        $pdf = FacadePdf ::loadview('dataprep-pdf');
        Return $pdf->download(('preparation.pdf'));
    }

    public function exportexcelprep(){
            return Excel::download(new PreparationExport, 'datapreparation.xlsx');
    }
    
}
