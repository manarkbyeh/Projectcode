@extends('layouts.app') @section('content')

<div class="container add_news_container">
  <h2 class="page_title">Nieuws Toevoegen</h2>

  <div id="all" class="add_news_div">
      <div class="success"></div>
       
        <script>
          formajax("addnews", "addnewsbtn", '{{url("news")}}');
        </script>
        {!! Form::open(['route' => 'news.store',"id"=>"addnews", 'files'=>true]) !!} {{ Form::label('title','Titel')}} {{ Form::text('title',old('title'),array('class' =>'form-control ','requireds'=>'','maxlength'=>'255'))}} {{ Form::label('text','Inhoud',["class" => 'form-space'])}} {{ Form::textarea('text',old('text'),array('class' =>'form-control','requireds'=>''))}} {{ Form::label('pic','foto',["class" => 'form-space'])}} {{ Form::file('pic')}} {{ Form::submit('Toevoegen',array('class'
        =>'btn btn-success addnewsbtn btn-lg bottom_buttom btn-block', 'style'=>'margin-top:20px'))}}
        <center><i class="fa fa-spinner fa-spin fa-2x loading hidden"></i></center>
        {!! Form::close() !!}

  </div>

</div>
@endsection