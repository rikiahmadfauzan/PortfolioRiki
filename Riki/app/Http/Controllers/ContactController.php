<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{

    function show(){
        $data['contact'] = Contact::all();
        return view('contact',$data);
    }



    function add(){
        $data = [
            'action' => url('contact/create'),
            'tombol' => 'simpan',
            'contact' => (object) [
                'id' => '',
                'namaLengkap' => '',
                'email' => '',
                'pesan' => '',

            ],
        ];
        return view('contact',$data);
     }

    /**
     * Show the form for creating a new resource.
     */


     function create(Request $req){
        $this->validate($req , [
            'namaLengkap' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);
        contact::create([
            'id' => $req->id,
            'namaLengkap' => $req->namaLengkap,
            'email' => $req->email,
            'pesan' => $req->pesan,


        ]);

        return redirect('project');
    }
    function hapus($id){
        $contact = Contact::where('id', $id)->first();
        $contact->delete();
         return redirect('contact');
      }





}
