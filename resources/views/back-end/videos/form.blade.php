@csrf
<div class="form-group">

    @php $input = 'name'; @endphp
    <label for="exampleInputEmail1">Video Name</label>
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
<br>

<div class="form-group">

    @php $input = 'des'; @endphp
    <label for="exampleInputEmail1">Video Description</label>
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
<br>

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
<br>

<div class="form-group">

    @php $input = 'youtube'; @endphp
    <label for="exampleInputEmail1">Youtube url</label>
    <input type="url" class="form-control @error($input)
                                        is-invalid
    @enderror" value="{{ isset($row) ? $row->{$input} : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp"
        name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>

<div class="form-group">

    @php $input = 'published'; @endphp
    <label for="exampleInputEmail1">Video status</label>
    <select name="{{ $input }}" class="form-control @error($input)
        is-invalid @enderror">
        <option value="1" {{ isset($row) && $row->{$input} == 1 ? 'selected' : '' }}>Published</option>
        <option value="0" {{ isset($row) && $row->{$input} == 0 ? 'selected' : '' }}>Hidden</option>
    </select>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>

<div>

    @php $input = 'image'; @endphp
    <label for="exampleInputEmail1">Video image</label><br>
    <input type="file" name="{{ $input }}">
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>
<div class="form-group">

    @php $input = 'cat_id'; @endphp
    <label for="exampleInputEmail1">Video Category</label>
    <select name="{{ $input }}" class="form-control @error($input)
        is-invalid @enderror">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ isset($row) && $row->{$input} == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>

<div class="form-group">

    @php $input = 'meta_des'; @endphp
    <label for="exampleInputPassword1">Meta Description</label>
    <textarea name="{{ $input }}" cols="30" rows="5"
        class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>

<div class="form-group">

    @php $input = 'skills[]'; @endphp
    <label for="exampleInputEmail1">Skills</label>
    <select name="{{ $input }}" class="form-control @error($input)
        is-invalid @enderror" multiple style="height: 100px">
        @foreach ($skills as $skill)
            <option value="{{ $skill->id }}" {{ in_array($skill->id, $selectedSkills) ? 'selected' : '' }}>
                {{ $skill->name }}
            </option>
        @endforeach
    </select>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<br>

<div class="form-group">

    @php $input = 'tags[]'; @endphp
    <label for="exampleInputEmail1">Tags</label>
    <select name="{{ $input }}" class="form-control @error($input)
        is-invalid @enderror" multiple style="height: 100px">
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedTags) ? 'selected' : '' }}>{{ $tag->name }}
            </option>
        @endforeach
    </select>
    @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
