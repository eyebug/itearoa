@extends('layouts.app')

@section('content')
<div>
    <h1>{{ $post['title'] or "Post Title" }}</h1>
    <hr>
    <p>
        {!! nl2br(htmlspecialchars($post['body'])) !!}

    </p>
    <hr>
    <p>Create at: {{$post['created_at']}}</p>
    @if(!empty($post['updated_at']))
    <p>Latest updated at: {{$post['updated_at']}}</p>
    @endif
    <hr>

    @if(count($post['tags']))
    <span>Tags: </span>
    @endif
    @foreach($post['tags'] as $tag)
    <a href="{{ route('getPostListWithTag', $tag) }}"><button class="btn btn-primary">{{ $tag }}</button></a>
    @endforeach


    @if(count($post['tags']))
    <hr>
    @endif

    @if($isAdmin)
    <a href="{{route('getPostUpdate', $post['_id'])}}">
        <button>Edit</button>
    </a>
    @endif
    <a href="{{route('postList')}}">
        <button>Back to list</button>
    </a>
</div>

@stop