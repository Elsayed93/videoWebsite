@csrf
<div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
<input type="text" class="form-control" value="{{isset($user) ? $user->name : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="name">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" value="{{isset($user) ? $user->email : ''}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
</div>


{{-- value="{{isset($user) ? $user->name : ''}}" --}}