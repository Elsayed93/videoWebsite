@extends('layouts.app')

@section('title')
    Online Learning Videos
@endsection

@section('content')
    <div class="section section-button">
        <div class="container">
            <div class="title">
                <h1>Latest Videos</h1>
            </div>

     @include('front-end.shared.video-row')
        </div>
    </div>

@endsection