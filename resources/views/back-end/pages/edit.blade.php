@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection


@section('content')

    @component('back-end.layout.nav-bar', ['navBar_title' => 'Edit '. $singleModelName])

    @endcomponent

    @component('back-end.shared.edit', ['modelName' => $modelName, 'pageDesc' => $pageDesc])
        <form action="{{ route($routeName . '.update', $row) }}" method="POST">
            @method('PUT')
            @include('back-end.'.$routeName.'.form')
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route($routeName . '.index') }}" class="btn btn-primary ml-3">back to {{$routeName}}</a>
        </form>
        @slot('md4')
            
        @endslot

    @endcomponent

@endsection
