<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index (){
        return view('site.home');
    }
    public function ocanil (){
        return view('site.o-canil');
    }
    public function ohusky (){
        return view('site.o-husky');
    }
    public function nossas_estrelas (){
        return view('site.nossas-estrelas');
    }
    public function filhotes (){
        return view('site.filhotes');
    }
    public function contato (){
        return view('site.contato');
    }
}
