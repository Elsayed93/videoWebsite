@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection


@section('content')

    @component('back-end.layout.nav-bar', ['navBar_title' => 'Edit '. $singleModelName])

    @endcomponent

    @component('back-end.shared.edit', ['modelName' => $modelName, 'pageDesc' => $pageDesc])
            @include('back-end.'.$routeName.'.form')     
        @slot('md4')
            
        @endslot

    @endcomponent

@endsection
