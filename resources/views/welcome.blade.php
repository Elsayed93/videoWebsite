@extends('layouts.app')

@section('title')
    Online Learning Videos
@endsection

@section('content')
@include('front-end.homepage-sections.home-image')
@include('front-end.homepage-sections.videos')
@include('front-end.homepage-sections.statics')
@if (auth()->user() == null || auth()->user()->group !== 'admin')
@include('front-end.homepage-sections.contact-us')    
@endif
    

@endsection
