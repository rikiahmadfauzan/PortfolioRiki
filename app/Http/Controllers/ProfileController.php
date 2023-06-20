<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
class ProfileController extends Controller
{

    function showformProfile(){
        return view('formProfile');
    }
    function show(){
        $data['profile'] = Profile::first();
        $data['action'] = url('profile/update'). '/' .$data['profile']->id;
        return view('profile',$data);
    }

    function add(){
        $data = [
            'action' => url('profile/create'),
            'profile' => (object) [
                'id' => '',
                'fotoProfile' => '',
                'namaLengkap' => '',
                'status' => '',
                'tempatTinggal' => '',
                'tanggalLahir' => '',
                'jenisKelamin' => '',
                'email' => '',
                'hobi' => '',
                'whatsapp'=> '',
                'instagram' => '',
                'telegram' => '',
                'twittter' => '',

            ],
        ];
        return view('profile',$data);
     }
     function create(Request $req){
        profile::create([
            'id' => $req->id,
            'fotoProfile' => $req->file('fotoProfile')->store('fotoProfile'),
            'namaLengkap' => $req->namaLengkap,
            'status' => $req->status,
            'tempatTinggal' => $req->tempatTinggal,
            'tanggalLahir' => $req->tanggalLahir,
            'jenisKelamin' => $req->jenisKelamin,
            'email' => $req->email,
            'hobi' => $req->hobi,
            'whatsapp' => $req->whatsapp,
            'instagram' => $req->instagram,
            'telegram' => $req->telegram,
            'twittter' => $req->twittter

        ]);
        return redirect('profile');
     }

     function hapus($id){
        $profile = Profile::where('id', $id)->first();
        $profile->delete();
        Storage::delete($profile->fotoProfile);
         return redirect('profile');
      }
      function edit($id){
        $data['profile'] = Profile::find($id);
        $data['action']= url('profile/update').'/'.$data['profile']->id;
        return view('profile',$data);
     }
      function update(Request $req){
         if($req->file('fotoProfile')){
                 $profile = Profile::where('id',$req->id)->first();
                 Storage::delete($profile->fotoProfile);

             $file = $req->file('fotoProfile')->store('fotoProfile');
         }else{
             $file = DB::raw('fotoProfile');
         }
         Profile::where('id', $req->id)->update([
            'id' => $req->id,
            'fotoProfile' => $file,
            'namaLengkap' => $req->namaLengkap,
            'status' => $req->status,
            'tempatTinggal' => $req->tempatTinggal,
            'tanggalLahir' => $req->tanggalLahir,
            'jenisKelamin' => $req->jenisKelamin,
            'email' => $req->email,
            'hobi' => $req->hobi,
            'whatsapp' => $req->whatsapp,
            'instagram' => $req->instagram,
            'telegram' => $req->telegram,
            'twittter' => $req->twittter

         ]);
         return redirect('profile');
      }
}
