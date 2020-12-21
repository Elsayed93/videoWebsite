@extends('layouts.app')

@section('title')
    {{ $video->name }}
@endsection
@section('content')
    <div class="section section-button">
        <div class="container">
            <div class="title">
                <h1>{{ $video->name }}</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    @php $url = getYoutubeId($video->youtube) @endphp
                    @if ($url)
                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ $url }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <br>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table>
                        <tr>
                            <td>
                                <p><i class="nc-icon nc-user-run">:</i>{{ $video->user->name }}</p>
                            </td>
                            <td>
                                <p></p><i class="nc-icon nc-calendar-60">:</i> {{ $video->created_at }}</p>
                            </td>
                            <td>
                                <p><i class="nc-icon nc-single-copy-04">:</i>{{ $video->des }}</p>
                            </td>
                            <td>
                                <p>
                                    <a href="{{ route('front.category', ['id' => $video->cat->id]) }}">
                                        {{ $video->cat->name }}
                                    </a>
                                </p>
                            </td>
                            <td>
                                <p>
                                    @foreach ($video->tags as $tag)
                                        <a href="{{ route('front.tags', ['id' => $tag->id]) }}">
                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                    @endforeach
                                </p>
                            </td>
                            <td>
                                <p>
                                    @foreach ($video->skills as $skill)
                                        <a href="{{ route('front.skill', ['id' => $skill->id]) }}">
                                            <span class="badge badge-info">{{ $skill->name }}</span>
                                        </a>
                                    @endforeach
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br>
            @include('front-end.video.comments')
            @include('front-end.video.create-comment')
        </div>

    </div>

@endsection
