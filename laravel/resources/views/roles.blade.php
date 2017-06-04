@extends('layouts.app') @section('content')

<div class="container">
<h1 class="page_title">Gebruikersoverzicht</h1>

  <div class="row">
    <div class="search_user_div">
        <label for="name">Search:</label>
        <input required="required" maxlength="255" name="name" type="text" id="name" class="form-control ">
        <button value="Create new richtingen" class="btn btn-success btn-lg btn-block " style="margin-top: 20px;" id="search">Search</button>
    </div>
    
    <div class="user_table_div">
      <table class="roles_table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>email</th>
            
            @if(Auth::user()->roles ==3)
                <th>roles</th>
            @endif
          </tr>
        </thead>
        
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            
            @if(Auth::user()->roles ==3)
            <td>
              <script>
                function myFunction() {
                  var path = "{{route('news.search',0)}}";
                  location.href = path.substr(0, path.length - 1) + document.getElementById("mySelect").value;
                }
              </script>

              {!! Form::open(['route' => ['roles.active',$user->id],'method'=>'POST', 'data-parsley-validate'=>'']) !!}
              <select name="roles" onchange="submit()">
                <option @if($user->roles==0) selected @endif value='0'>Student</option>
                <option @if($user->roles==1) selected @endif value='1'>Writer</option>
                <option @if($user->roles==2) selected @endif value='2'>Editor</option>
                <option @if($user->roles==3) selected @endif value='3'>Admin</option>
              </select>
              {!! Form::close() !!}
            </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#search').click(function() {
        alert($('#name').val());
        var path = "{{route('roles.search',0)}}";
        location.href = path.substr(0, path.length - 1) + $('#name').val();
      });
    });
  </script>
  <script>
    function myFunction() {
      var path = "{{route('news.search',0)}}";
      location.href = path.substr(0, path.length - 1) + document.getElementById("mySelect").value;
    }
  </script>




  @endsection