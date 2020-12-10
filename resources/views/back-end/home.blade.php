@extends('back-end.layout.app')

@section('title')
    home
@endsection

@push('css')
  
@endpush

@section('content')
    @component('back-end.layout.nav-bar', ['navBar_title' => 'Home Page'])

    @endcomponent
    <h3>Home Admin Page</h3>
@endsection
