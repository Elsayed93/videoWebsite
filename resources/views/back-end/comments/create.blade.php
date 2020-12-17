<form action="{{route('comment.store')}}" method="POST">
    @csrf
    @include('back-end.comments.form')
    <input type="hidden" value="{{$row->id}}" name="video_id">
    <button type="submit" class="btn btn-primary">Add Comment</button>
</form> 