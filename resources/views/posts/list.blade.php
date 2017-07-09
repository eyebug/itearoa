@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/postDelete.js') }}"></script>
<div>
    <h1>Posts</h1>
    @if($isAdmin)
    <span><a href="{{ route('getPostCreate') }}">Create new post</a></span>
    @endif
    @if(count($posts))
    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('getPost',$post['_id']) }}">{{ $post['title'] }}</a>
            @if($isAdmin)
            <a href="{{route('getPostUpdate', $post['_id'])}}"> | Edit</a>
            <a href="#" postID="{{ $post['_id'] }}" class="deletePost"> | Delete</a>
            @endif
        </li>
        @endforeach
    </ul>
    @endif
</div>

@stop