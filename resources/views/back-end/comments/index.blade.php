<table class="table table-light">
    @foreach ($comments as $comment)
        <tr>
            <td>
                <p>{{ $comment->user->name }}</p>
                <p>{{ $comment->comment }}</p>
                <p>{{ $comment->created_at }}</p>

            </td>

            <td>
                <a href="{{ route('comment.edit', $comment->id) }}"><i rel='tooltip' class="far fa-edit fa-lg mr-2"
                        data-original-title="Edit comment"></i></a>


                <a href="{{ route('comment.delete', $comment->id) }}"><i rel='tooltip'
                        class="fas fa-trash-alt fa-lg mr-2" data-original-title="Remove comment"></i></a>

            </td>
        </tr>
    @endforeach
</table>
