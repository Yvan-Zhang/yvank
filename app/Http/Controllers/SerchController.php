<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use QL\QueryList;

class SerchController extends Controller
{
    public function serch(Request $request)
    {
         $mystring=$request->itemurl?$request->itemurl:'https://item.taobao.com/item.htm?id=563075843927';
         $findTb = '//item.taobao.com';
         $findTm = '//detail.tmall.com';
         $findJd = '//item.jd.com';
         $findSn = '//product.suning.com';
         $findGm = '//item.gome.com.cn';
         $findYhd = '//item.yhd.com';
         $typeTb = strpos($mystring, $findTb);
         $typeTm = strpos($mystring, $findTm);
         $typeJd = strpos($mystring, $findJd);
         $typeSn = strpos($mystring, $findSn);
         $typeGm = strpos($mystring, $findGm);
         $typeYhd = strpos($mystring, $findYhd);

         if (!$typeTb === false && $findTb == '//item.taobao.com'){

             $mystring=$request->itemurl?$request->itemurl:'https://item.taobao.com/item.htm?id=563075843927';
             $html = file_get_contents($mystring);
             $data = QueryList::html($html)->rules([
                 'pic' => ['#J_UlThumb img','data-src'],
             ])->query()->getData();
             $num=count($data);
             for ($i=0; $i < count($data); $i++) {
                 $datas[$i]='http:'.str_replace('_50x50.jpg','',$data[$i]['pic']);

             }
             return view('static_pages/serch',compact('datas'));
         }elseif (!$typeTm === false && $findTm == '//detail.tmall.com') {

              $mystring=$request->itemurl?$request->itemurl:'https://detail.tmall.com/item.htm?id=558539263094';
              $html = file_get_contents($mystring);
              $data = QueryList::html($html)->rules([
                  'pic' => ['#J_UlThumb img','src'],
              ])->query()->getData();
              $num=count($data);
              for ($i=0; $i < count($data); $i++) {
                  $datas[$i]='http:'.str_replace('_60x60q90.jpg','',$data[$i]['pic']);
              }
              return view('static_pages/serch',compact('datas'));
          }elseif (!$typeJd === false && $findJd == '//item.jd.com') {
              $mystring=$request->itemurl?$request->itemurl:'https://item.jd.com/10785388229.html';
              $html = file_get_contents($mystring);
              $data = QueryList::html($html)->rules([
                  'pic' => ['ul.lh img','data-url'],
              ])->query()->getData();
              //dump($data->all());exit;
              $num=count($data);
              for ($i=0; $i < count($data); $i++) {
                  $datas[$i]='http://img11.360buyimg.com/n12/'.$data[$i]['pic'];
              }
              return view('static_pages/serch',compact('datas'));
            }elseif (!$typeSn === false && $findSn == '//product.suning.com') {
              $mystring=$request->itemurl?$request->itemurl:'https://item.jd.com/10785388229.html';
              $html = file_get_contents($mystring);
              $data = QueryList::html($html)->rules([
                  'pic' => ['div.imgzoom-thumb-main img','src-large'],
              ])->query()->getData();
              //dump($data->all());exit;
              $num=count($data);
              for ($i=0; $i < count($data); $i++) {
                  $datas[$i]='http:'.$data[$i]['pic'];
              }
              return view('static_pages/serch',compact('datas'));
          }elseif (!$typeGm === false && $findGm == '//item.gome.com.cn') {
              $mystring=$request->itemurl?$request->itemurl:'http://item.gome.com.cn/A0006039799-pop8009212339.html';
              $html = file_get_contents($mystring);
              $data = QueryList::html($html)->rules([
                  'pic' => ['div.magnifier .pic-list .pic-small ul li img','rpic'],
              ])->query()->getData();
              //dump($data->all());exit;
              $num=count($data);
              for ($i=0; $i < count($data); $i++) {
                  $datas[$i]='http:'.str_replace('_800_pc','',$data[$i]['pic']);
              }
              return view('static_pages/serch',compact('datas'));
          }elseif (!$typeYhd === false && $findYhd == '//item.yhd.com') {
              $mystring=$request->itemurl?$request->itemurl:'http://item.gome.com.cn/A0006039799-pop8009212339.html';
              $html = file_get_contents($mystring);
              $data = QueryList::html($html)->rules([
                  'pic' => ['div.hideBox img','original_src'],
              ])->query()->getData();
              //dump($data->all());exit;
              $num=count($data);
              for ($i=0; $i < count($data); $i++) {
                  $datas[$i]='http://img12.360buyimg.com/n1/s800x800_'.$data[$i]['pic'];
              }
              return view('static_pages/serch',compact('datas'));
          }else{
              $datas=[];
              return view('static_pages/serch',compact('datas'));
          }

    }
}
