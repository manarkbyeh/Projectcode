@extends('layouts.app') @section('content')
<div class="container">
  <div class="success"></div>
  <div class="row delete_news_div">
    <h1>{{$news->title}}</h1>
    <p> {{$news->text}}</p>

    <script>
      formajax("deletenews", "deletenewsbtn", '{{url("news")}}');
    </script>

    {{ Form::open(['route'=>['news.destroy',$news->id],"id"=>"deletenews",'method'=>'Delete'])}} {{Form::submit('Verwijderen',["class" => 'btn btn-block btn-sm deletenewsbtn'])}} {{Form::close()}}

  </div>
</div>
@endsection