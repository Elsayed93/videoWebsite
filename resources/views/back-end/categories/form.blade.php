@csrf
<div class="form-group">

    @php $input = 'name'; @endphp
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control @error($input)
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

    @php $input = 'meta_keywords'; @endphp
    <label for="exampleInputEmail1">Meta keywords</label>
    <input type="text" class="form-control @error($input)
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

    @php $input = 'meta_des'; @endphp
    <label for="exampleInputPassword1">Meta Description</label>
    <textarea name="{{ $input }}" cols="30" rows="10"
        class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
