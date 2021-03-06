@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>
        @if(count($post->tags))
            <ul>
                @foreach($post->tags as $tag)
                    <li>{{$tag->name}}</li>
                @endforeach

            </ul>
        @endif
         <p>{{$post->body}}</p> 
    </div>

    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}: &nbsp
                    </strong> 
                    {{$comment->body}}
                </li>
            @endforeach
        </ul>
    </div>
    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{$post->id}}/comments">

                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" id="" placeholder="Your comment here." class="form-control">
                    </textarea>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>

            @include ('layouts.errors')
        </div>
    </div>
    
@endsection
