<form action="{{ route($routeName . '.destroy', $row) }}" method="POST">
    @csrf
    @method('delete')
    <button type="submit"><i rel='tooltip' class="fas fa-trash-alt fa-lg mr-2"
            data-original-title="Remove {{ $singleModelName }}"></i></button>
</form>
