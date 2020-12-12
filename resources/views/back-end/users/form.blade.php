@csrf
<div class="form-group">

    @php $input = 'name'; @endphp
    <label for="exampleInputEmail1">User Name</label>
    <input type="{{$input}}" class="form-control @error($input)
                        is-invalid
    @enderror" value="{{ isset($user) ? $user->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="form-group">

    @php $input = 'email'; @endphp
    <label for="exampleInputEmail1">Email address</label>
    <input type="{{ $input }}" class="form-control @error($input)
                        is-invalid
    @enderror" value="{{ isset($user) ? $user->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

<div class="form-group">

    @php $input = 'password'; @endphp
    <label for="exampleInputPassword1">Password</label>
    <input type="{{$input}}" class="form-control @error($input)
                        is-invalid
    @enderror" id="exampleInputPassword1" name="{{$input}}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>


{{-- value="{{ isset($user) ? $user->name : '' }}" --}}
