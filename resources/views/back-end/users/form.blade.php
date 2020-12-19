@csrf
<div class="form-group">

    @php $input = 'name'; @endphp
    <label for="exampleInputEmail1">User Name</label>
    <input type="{{$input}}" class="form-control @error($input)
                        is-invalid
    @enderror" value="{{ isset($row) ? $row->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
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
    @enderror" value="{{ isset($row) ? $row->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
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

<div class="form-group">

    @php $input = 'group'; @endphp
    <label for="exampleInputEmail1">Auth</label>
    <select name="{{ $input }}" class="form-control @error($input)
        is-invalid @enderror">
        <option value="admin" {{ isset($row) && $row->{$input} == 1 ? 'admin' : '' }}>Admin</option>
        <option value="user" {{ isset($row) && $row->{$input} == 0 ? 'user' : '' }}>User</option>
    </select>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
