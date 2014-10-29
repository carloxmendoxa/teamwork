@extends('layouts.default')
@section('content')
<h1>Create Task</h1>
{{ Form::open(array('route' => 'tasks.store')) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ Form::label('description', 'Description') }}
{{ Form::text('description') }}
{{ Form::label('duration', 'Duration') }}
{{ Form::text('duration') }}
{{ Form::label('startDate', 'Start Date') }}
{{ Form::text('startDate') }}
{{ Form::label('endDate', 'End Date') }}
{{ Form::text('endDate') }}
{{ Form::label('statusTask', 'Status Task') }}
{{ Form::text('statusTask') }}
{{ Form::submit('Create',array('class'=>'button')) }}
{{ Form::close() }}
@stop