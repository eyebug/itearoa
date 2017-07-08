@extends('layouts.app')

@section('content')
<div>
    <h1>Edit an existed post</h1>
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
        {!!Form::submit('Submit', null, ['class' => 'form-control btn btn-primary'])!!}
    </div>


    {!! Form::close() !!}
</div>

@stop