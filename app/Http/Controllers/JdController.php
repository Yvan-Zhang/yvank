<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class JdController extends Controller
{
    public function urltophone(Request $request)
    {
        $mystring=$request->itemurl ? $request->itemurl : 'https://item.jd.com/000000.html';
        $findJd = '//item.jd.com';
        $typeJd = strpos($mystring, $findJd);
        if (!$typeJd === false){
            $murl=str_replace('//item.jd.com/','//item.m.jd.com/product/',$mystring);
            $murls = $murl == 'https://item.m.jd.com/product/000000.html' ? '' : $murl ;
            return view('static_pages/jdurl',compact('murls'));
        }else{
            $murls ='请输入正确的PC端宝贝链接！';
            return view('static_pages/jdurl',compact('murls'));
         }

    }
}
