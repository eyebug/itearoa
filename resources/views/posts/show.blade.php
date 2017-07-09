@extends('layouts.app')

@section('content')
<div>
    <h1>{{ $post['title'] or "Post Title" }}</h1>
    <hr>
    <p>
        {!! nl2br(htmlspecialchars($post['body'])) !!}

    </p>
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