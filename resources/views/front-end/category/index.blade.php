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

            <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        @include('front-end.shared.video-card')

                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
