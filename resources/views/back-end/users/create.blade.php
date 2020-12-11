@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>
        input[type] {
            border-radius: 5px;
            padding-left: 5px;
            font-size: 18px;
        }

    </style>
@endpush

@section('content')
    @component('back-end.layout.nav-bar', ['navBar_title' => 'Create User'])

    @endcomponent

    @component('back-end.shared.create', ['modelName' => $modelName, 'pageDesc' => $pageDesc])
        <form action="{{ route($routeName . '.store') }}" method="POST">
            @include('back-end.'.$routeName.'.form')
            <button type="submit" class="btn btn-primary">Add User</button>
            <a href='{{ route($routeName . '.index') }}' class="btn btn-primary">Back to users</a>
        </form>
    @endcomponent

@endsection
