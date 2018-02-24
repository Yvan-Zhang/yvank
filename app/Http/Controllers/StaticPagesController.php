<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }
    public function serch()
    {
        $datas=[];
        return view('static_pages/serch',compact('datas'));
    }
    public function jdurl()
    {
        $murls='';
        return view('static_pages/jdurl',compact('murls'));
    }

}
