<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){

        $services = Service::all();
        $clients = Client::all();
        return view('public.home', ['services' => $services, 'clients' => $clients]);

    }
    public function resume(){
        return view('public.resume');
        
    }
    public function jobs(){
        return view('public.jobs');
        
    }
    public function blog(){
        return view('public.blog');
        
    }
    public function contact(){
        return view('public.contact');
        
    }
}
