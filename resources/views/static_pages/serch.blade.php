@extends('layouts.default')
<style>
.piclist{width:100%;text-align: center;padding: 0;}
.piclist ul{width:100%;text-align: center;padding: 0;}
.piclist ul li{display: inline-block;width: 300px;height: 390px;}
.piclist ul li img{width: 100%;max-height: 300px;overflow: hidden;}
</style>
<script type="text/javascript">
function download(src) {
  var $a = document.createElement('a');
  $a.setAttribute("href", src);
  $a.setAttribute("download", "");
  var evObj = document.createEvent('MouseEvents');
  evObj.initMouseEvent( 'click', true, true, window, 0, 0, 0, 0, 0, false, false, true, false, 0, null);
  $a.dispatchEvent(evObj);
};
</script>
@section('content')
<form style="margin-top:30px;" method="POST" action="{{ route('serch') }}">
    {{ csrf_field() }}
    <p>
        <input style="text-align:center" type="text" name="itemurl" class="form-control" placeholder="支持  淘宝/天猫/京东/苏宁/国美/一号店  详情链接">
    </p>
    <p style="text-align:center;margin-top: 30px;margin-bottom: 35px;">
        <button class="btn btn-primary radius" type="submit" ><i class="glyphicon glyphicon-picture"></i> 获取主图</button>
    </p>
</form>
<div class="piclist">
<ul>
    @foreach ($datas as $data)
    <li><img src="{{ $data }}" alt=""><a href="{{ $data }}" download="{{ $data }}" style="margin-top: 20px;margin-bottom: 20px;" class="btn btn-success radius" type="submit"><i class="glyphicon glyphicon-download-alt"></i>下载</a></li>
    @endforeach



</ul>
</div>
@stop
