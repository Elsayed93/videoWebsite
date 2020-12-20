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
                @php $url = getYoutubeId($video->youtube)  @endphp
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
                    <p ><i class="nc-icon nc-user-run">:</i>{{ $video->user->name }}</p>
                    </td>
                    <td>
                    <p></p><i class="nc-icon nc-calendar-60">:</i> {{ $video->created_at }}</p>
                    </td>
                    <td>
                    <p><i class="nc-icon nc-single-copy-04">:</i>{{ $video->des }}</p>
                    </td>
                    <td>
                    <p>
                        <a href="{{ route('front.category',["id" => $video->cat->id]) }}">
                        {{ $video->cat->name }}
                        </a>
                    </p>
                    </td>
                    <td>
                    <p>
                        @foreach ($video->tags as $tag)
                        <a href="{{ route('front.tags',["id" => $tag->id]) }}">
                        <span class="badge badge-primary">{{ $tag->name }}</span>
                        @endforeach
                    </p>
                    </td>
                    <td>
                     <p>
                        @foreach ($video->skills as $skill)
                        <a href="{{ route('front.skill',["id" => $skill->id]) }}">
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
            <div class="row" id="comments">
                <div class="col-md-12">
                    <div class="card text-left">
                    <div class="card-header card-header-rose">
                        @php
                          $comments=$video->comments  
                        @endphp
                    <h5>Comments({{ count($comments) }})</h5>
                    </div>
                    <div class="card-body">
                    @foreach ( $comments as $comment)
                    <div class="row">
                        <div class="col-md-8">
                        <i class="nc-icon nc-33">:</i>{{ $comment->user->name }}
                    </div>
                    <div class="col-md-4 text-right">
                        <span><i class="nc-icon nc-calendar-60">:</i>{{ $comment->created_at }}</span>
                        @if (auth()->user()->group == 'admin' || auth()->user()->id == $comment->user->id)
                        <a href="">  | edit</a> 
                        <div>
                            <form action="{{ route('front.commentUpdate',['id' => $comment->id]) }}" method="POST">
                                @csrf
                                <textarea name="comment" rows="6">{{ $comment->comment }}</textarea>                        
                                <button type="submit">Edit</button>
                            </form> 
                            </div>                            
                        @endif
                    </div>
                    </div>                    
                     <p>{{ $comment->comment }}</p> <br>
                     @if (! $loop->last)
                         <hr>
                     @endif
                    @endforeach
            </div>
           </div>                        
          </div>
         </div>
        </div>
       </div>
            
     </div>

@endsection
