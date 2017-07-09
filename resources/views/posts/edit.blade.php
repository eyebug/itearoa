@extends('layouts.app')

@section('content')
<div>
    <h1>Edit an existed post</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::open(['route' => 'postPostUpdate']) !!}
    {!!Form::hidden('id', $post['_id'])!!}
    <div class="form-group">
        {!!Form::label('title', 'Title:')!!}
        {!!Form::text('title', $post['title'], ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('body', 'Body:')!!}
        {!!Form::textarea('body', $post['body'], ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('tag', 'Tags:')!!}
        {!!Form::text('tags', $post['tags'], ['class' => 'form-control', 'placeholder' => 'Tags with comma separator'])!!}
    </div>

    <hr>
    <p>Create at: {{$post['created_at']}}</p>
    @if(!empty($post['updated_at']))
    <p>Latest updated at: {{$post['updated_at']}}</p>
    @endif
    <hr>

    <div class="form-group">
        {!!Form::submit('Submit', null, ['class' => 'form-control btn btn-primary'])!!}
    </div>


    {!! Form::close() !!}
</div>

@stop