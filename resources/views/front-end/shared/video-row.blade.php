           <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        @include('front-end.shared.video-card')

                    </div>
                @endforeach

            </div>

            
                    {{-- {{ $videos->links() }} --}}
            </div>
        </div>