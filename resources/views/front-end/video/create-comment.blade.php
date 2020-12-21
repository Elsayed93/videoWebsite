<div class="row" id="comments">
                    @if (auth()->user())

                        <form action="{{ route('front.commentStore', ['id' => $video->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Add Comment</label>
                                <textarea name="comment" class="form-control" cols="200" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Add Comment</button>
                        </form>
                    @endif

                </div>