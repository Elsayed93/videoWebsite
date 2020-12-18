@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection


@section('content')

    @component('back-end.layout.nav-bar', ['navBar_title' => 'Edit ' . $singleModelName])

    @endcomponent

    @component('back-end.shared.edit', ['modelName' => $modelName, 'pageDesc' => $pageDesc])
        <form action="{{ route($routeName . '.update', $row) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('back-end.'.$routeName.'.form')
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route($routeName . '.index') }}" class="btn btn-primary ml-3">back to {{ $routeName }}</a>
        </form>
        @slot('md4')
            @php
            $url = getYoutubeId($row->youtube)
            @endphp
            @if ($url)
                <iframe width="280" src="https://www.youtube.com/embed/{{ $url }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <br>
            @endif
            <img width="280" src="{{ url('uploads/' . $row->image) }}" alt="">
        @endslot
        <br>
    @endcomponent

    @component('back-end.shared.edit', ['modelName' => 'Comments', 'pageDesc' => 'here you can control comments'])
        @include('back-end.comments.index')
        @slot('md4')
            @include('back-end.comments.create')
        @endslot
        <br>
    @endcomponent

@endsection
