<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterInfoController extends Controller
{
    //
    public function contact(){
       return view('footerinfo.contact');
    }

    public function policy(){
        return view('footerinfo.policy');
    }

    public function privacy(){
        return view('footerinfo.privacy');
    }

    public function setting(){
        return view('footerinfo.setting');
    }

    public function terms(){
        return view('footerinfo.terms');
    }
}
