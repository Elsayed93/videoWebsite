@extends('layouts.app')

@section('title')
    {{ $cat->name }}
@endsection
@section('content')
    <div class="section section-button">
        <div class="container">
            <div class="title">
                <h1>{{ $cat->name }}</h1>
            </div>
             @include('front-end.shared.video-row')  
                <div class="col-md-12">
                    {{ $videos->links() }}
            </div>
        </div>
    </div>

@endsection
