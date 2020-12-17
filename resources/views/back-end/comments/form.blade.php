
<div class="form-group">

    @php $input = 'comment'; @endphp
    <label for="exampleInputPassword1">Comments</label>
    <textarea name="{{ $input }}" cols="30" rows="5"
        class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>