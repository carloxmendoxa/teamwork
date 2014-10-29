@extends('layouts.default')
@section('content')
<h1>Create Task</h1>
{{ Form::open(array('route' => 'tasks.store')) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description') }}
{{ Form::label('duration', 'Duration') }}
{{ Form::number('duration', '1') }}
{{ Form::label('startDate', 'Start Date') }}
{{ Form::text('startDate') }}
{{ Form::label('endDate', 'End Date') }}
{{ Form::text('endDate') }}
{{ Form::label('statusTask', 'Status Task') }}
{{ Form::select('statusTask', array('0' => 'Pending', '1' => 'Finished'), '0') }}
{{ Form::submit('Create',array('class'=>'button')) }}
{{ Form::close() }}
@stop