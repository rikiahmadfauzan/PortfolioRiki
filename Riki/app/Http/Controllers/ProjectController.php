<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Portofolio;
use App\Models\Contact;


class ProjectController extends Controller
{
    function show(){
        $data['profile'] = Profile::first();
        $data['portofolio'] = Portofolio::all();
        $data['contact'] = Contact::all();
        return view('project', $data);
    }
}
