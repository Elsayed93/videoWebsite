@csrf
<div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control @error('name')
                is-invalid
    @enderror" value="{{ isset($user) ? $user->name : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="name">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control @error('email')
                is-invalid
    @enderror" value="{{ isset($user) ? $user->email : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control @error('password')
                is-invalid
    @enderror" id="exampleInputPassword1" name="password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>


{{-- value="{{ isset($user) ? $user->name : '' }}" --}}
