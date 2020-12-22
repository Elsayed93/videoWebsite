@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection
@section('content')

<div class="section profile-content" style="margin-top: 190px;"> 
    <div class="container">
      <div class="owner">
        <div class="name">
          <h4 class="title">{{ $user->name }} 
            <br>
          </h4>
          <h6 class="description">
              {{$user->email}}
          </h6>
        </div>
      </div>
      @if(auth()->user() && $user->id == auth()->user()->id )
      <br>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <br>
          <btn onclick="$('div#profileCard').slideToggle(1000)" class="btn btn-outline-default btn-round"> Update Profile</btn>
        </div>
      </div>
      @include('front-end.profile.edit')
      @endif
    </div>
  </div> 

@endsection
