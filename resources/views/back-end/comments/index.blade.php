<table class="table table-dark" id="comments">
    @foreach ($comments as $comment)
        <tr>
            <td>
                <p>{{ $comment->user->name }}</p>
                <p>{{ $comment->comment }}</p>
                <p><small>{{ $comment->created_at }}</small></p>

            </td>

            <td>
                <a href="{{ route('videos.edit', $comment->id) }}"><i rel='tooltip' onclick="$(this).closest('tr').next('tr').slideToggle()" class="far fa-edit fa-lg mr-2"
                        data-original-title="Edit comment"></i></a>


                <a href="{{ route('comment.delete', $comment->id) }}"><i rel='tooltip'
                        class="fas fa-trash-alt fa-lg mr-2" data-original-title="Remove comment"></i></a>

            </td>
        </tr>
        <tr style="display: none;">
            <td colspan="4">
                <form action="{{route('comment.update',  $comment->id )}}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('back-end.comments.form', ['row' => $comment])
                    <input type="hidden" value="{{$row->id}}" name="video_id">
                    <button type="submit" class="btn btn-primary">Update Comment</button>
                    <div class="clearfix"></div>
                </form> 
            </td>
        </tr>
    @endforeach
</table>
