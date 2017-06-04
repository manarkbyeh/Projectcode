@extends('layouts.app') @section('content')
<div class="container add_erv_container">
  <h2 class="page_title">Ervaringen Toevoegen</h2>

  <div id="all"  class="add_erv_div">
      <div class="success"></div>

        <script>
          formajax("addtestimonial", "addtestimonialbtn", '{{url("testimonials")}}');
        </script>
        {!! Form::open(['route' => 'testimonials.store',"id"=>"addtestimonial", 'files'=>true]) !!} {{ Form::label('name','Titel')}} {{ Form::text('name',old('name'),array('class' =>'form-control '))}} {{ Form::label('url','Url:')}} {{ Form::text('url',old('url'),array('class'
        =>'form-control '))}} {{ Form::label('text','Inhoud',["class" => 'form-space'])}} {{ Form::textarea('text',old('text'),array('class' =>'form-control'))}} {{ Form::label('image_cover','Foto',["class" => 'form-space'])}} {{ Form::file('image_cover')}}
        {{ Form::submit('Toevoegen',array('class' =>'btn btn-success addtestimonialbtn btn-lg bottom_buttom btn-block', 'style'=>'margin-top:20px'))}}
        <center><i class="fa fa-spinner fa-spin fa-2x loading hidden"></i></center>
        {!! Form::close() !!}

-->
  </div>

</div>
@endsection