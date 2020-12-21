@extends('layouts.app')

@section('title')
    Online Learning Videos
@endsection

@section('content')
    <div class="section section-button">
        <div class="container">
            <div class="title">
                <h1>Latest Videos</h1>
                @if(request()->has('search') && request()->get('search') != '')
                    <p style="margin-top: 10px;">
                        You are searching for <b>{{request()->get('search')}}</b>|<a href="{{route('home')}}">Reset</a>
                    </p>
                @endif
            </div>

     @include('front-end.shared.video-row')
        </div>
    </div>

@endsection
