@extends('layouts.default')

@section('content')

<form style="margin-top:30px;" method="POST" action="{{ route('urltophone') }}">
    {{ csrf_field() }}
    <p>
        <input style="width:100%;text-align:center;" type="text" name="itemurl" class="form-control" placeholder="请输入京东PC端详情链接">
    </p>
    <p style="text-align:center;margin-top: 20px;margin-bottom: 20px;">
        <button class="btn btn-primary radius" type="submit" ><i class="glyphicon glyphicon-link"> </i> 转换链接</button>
    </p>
    <p>
        <input style="width:100%;text-align:center;height: 40px;" type="text" class="form-control" value="{{ $murls }}" placeholder="">
    </p>
</form>

@stop
