@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello</h1>
    <p class="lead">
      你现在所看到的是设计师常用工具的主页。
    </p>
    <p>
        让复杂的事情简单化。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">暂不开放注册</a>
    </p>
  </div>
@stop
