@extends('layouts.app')

@section('title')
    {{ $skill->name }}
@endsection
@section('content')
    <div class="section section-button">
        <div class="container">
            <div class="title">
                <h1>{{ $skill->name }}</h1>
            </div>

 @include('front-end.shared.video-row')
    </div>

@endsection
