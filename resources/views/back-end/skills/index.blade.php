@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>
        table,
        table th,
        td {
            text-align: center;
            color: black !important;
            font-size: 16px;
            border-radius: 5px;
        }

        td a {
            color: #8b92a9 !important;
        }

        form {
            display: inline-block;
        }

        form button {
            border-style: none;
            cursor: pointer;
        }

    </style>
@endpush

@section('content')
    @component('back-end.layout.nav-bar', ['navBar_title' => $routeName . ' Page'])

    @endcomponent

    @component('back-end.shared.table', ['modelName' => $modelName, 'singleModelName' => $singleModelName, 'pageDesc' =>
        $pageDesc])
        @slot('addButton')
            <div class="col-4 d-flex align-items-center">
                <a class="btn btn-primary" href="{{ route($routeName . '.create') }}" role="button">Add {{ $singleModelName }}</a>
            </div>
        @endslot
        <table class="table table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>
                        @include('back-end.shared.buttons.edit')
                        @include('back-end.shared.buttons.delete')
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $rows->links() !!}
    @endcomponent
@endsection
