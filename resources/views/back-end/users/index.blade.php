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
    @component('back-end.layout.nav-bar', ['navBar_title' => 'Users Page'])

    @endcomponent
    <div class="card" style="width: fit-content;">
        <div class="row">
            <div class="col-8">
                <div class="card-body" style="color: white;">
                    <h3 class="card-title" style="color: white;">{{ $modelName }} index</h3>
                    <p class="card-text">
                        {{ $pageDesc }}
                    </p>
                </div>
            </div>

            <div class="col-4 d-flex align-items-center">
                <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Add {{ $singleModelName }}</a>
            </div>
        </div>
    </div>
    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}"><i rel='tooltip' class="far fa-edit fa-lg mr-2"
                                data-original-title="Edit {{$singleModelName}}"></i></a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit"><i rel='tooltip' class="fas fa-trash-alt fa-lg mr-2"
                                    data-original-title="Remove {{$singleModelName}}"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->links() !!}

@endsection
