@extends('layouts.app') @section('content')
<div class="container">
  <div class="success"></div>
  <div class="row edit_news_div">
    <script>
      formajax("editnews", "editnewsbtn", '{{url("news")}}');
    </script>
    {!! Form::model($news,['route'=>['news.update',$news->id],'method' => 'PATCH',"id"=>"editnews",'files'=>true]) !!}

      {{ Form::label('title','TITLE:')}} {{ Form::text('title',null,["class" => 'form-control input-lg'])}} {{ Form::label('text','BODY POST:',["class" => 'form-space'])}} {{ Form::textarea('text',$value=null,array('class' =>'form-control','required'=>''))}}
      {{ Form::label('pic','image post:',["class" => 'form-space'])}} {{ Form::file('pic')}}

    {{ Form::submit('Bewerken',array('class' =>'btn btn-success btn-block btn-sm editnewsbtn '))}}
            
    <center><i class="fa fa-spinner fa-spin fa-2x loading hidden"></i></center>

  </div>
</div>
@endsection