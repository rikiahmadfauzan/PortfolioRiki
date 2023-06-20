<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;

class PortofolioController extends Controller
{

    function tampilform(){
        return view('formportofolio');
    }

    function show(){
        $data['portofolio'] = Portofolio::all();
        return view('portofolio',$data);
    }

    function add(){
        $data = [
            'action' => url('portofolio/create'),
            'portofolio' => (object) [
                'id' => '',
                'namaProject' => '',
                'project' => '',
                'desProject' => '',

            ],
        ];
        return view('portofolio',$data);
     }
     function create(Request $req){
        portofolio::create([
            'id' => $req->id,
            'namaProject' => $req->namaProject,
            'project' => $req->file('project')->store('project'),
            'desProject' => $req->desProject

        ]);
        return redirect('portofolio');
     }

     function hapus($id){
        $portofolio = Portofolio::where('id', $id)->first();
        $portofolio->delete();
        Storage::delete($portofolio->project);
         return redirect('portofolio');
      }
      function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action']= url('portofolio/update').'/'.$data['portofolio']->id;
        return view('formPortofolio',$data);

     }
      function update(Request $req){
         if($req->file('project')){
                 $portofolio = Portofolio::where('id',$req->id)->first();
                 Storage::delete($portofolio->project);

             $file = $req->file('project')->store('project');
         }else{
             $file = DB::raw('project');
         }
         Portofolio::where('id', $req->id)->update([
             'id' => $req->id,
             'namaProject' => $req->namaProject,
             'project' => $file,
             'desProject' => $req->desProject,


         ]);
         return redirect('portofolio');
      }
}
