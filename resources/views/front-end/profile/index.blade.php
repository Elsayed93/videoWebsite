@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection
@section('content')

<div class="section profile-content" style="margin-top: 190px;"> 
    <div class="container">
      <div class="owner">
        <!-- <div class="avatar">
          <img src="/frontend/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
        </div> -->
        <div class="name">
          <h4 class="title">{{ $user->name }} 
            <br>
          </h4>
          <h6 class="description">
              {{$user->email}}
          </h6>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <br>
          <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
        </div>
      </div>
      <br>
    </div>
  </div> 

@endsection
