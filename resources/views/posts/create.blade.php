@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div>
    <h1>Write a new post</h1>
    {!! Form::open(['route' => 'postPostCreate']) !!}
    <div class="form-group">
        {!!Form::label('title', 'Title:')!!}
        {!!Form::text('title', null, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('body', 'Body:')!!}
        {!!Form::textarea('body', null, ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('tag', 'Tags:')!!}
        {!!Form::text('tags', null, ['class' => 'form-control', 'placeholder' => 'Tags with comma separator'])!!}
    </div>

    <div class="form-group">
        {!!Form::submit('Submit', null, ['class' => 'form-control btn btn-primary'])!!}
    </div>


    {!! Form::close() !!}
</div>

@stop