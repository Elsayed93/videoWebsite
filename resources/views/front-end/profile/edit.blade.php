<div class="card text-center" style="margin-top:20px; display:none;" id="profileCard">
  <div class="card-header">
   <h4 style="margin-top: 10px; margin-bottom:5px;">Update Profile</h4>
  </div>
  <div class="card-body">
  <form action="{{route('profile.update')}}" method="POST"> {{-- --}}
  @csrf  
    <div class="row" >
        
                <div class="form-group col-md-12" >
                
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
                
                <div class="form-group col-md-12">
                
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
                
                <div class="form-group col-md-12">
                
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
                <button type="submit" class="btn btn-dark btn-round" style="margin-left:480px;">Update Profile</button>
                <div class="clearfix"></div>
    </div>

</form>
  </div>
</div> 
