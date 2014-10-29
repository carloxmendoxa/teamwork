@extends('layouts.default')
@section('content')
<h1>Edit Task</h1>
{{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description') }}
{{ Form::label('duration', 'Duration') }}
{{ Form::number('duration') }}
{{ Form::label('startDate', 'Start Date') }}
{{ Form::text('startDate') }}
{{ Form::label('endDate', 'End Date') }}
{{ Form::text('endDate') }}
{{ Form::label('statusTask', 'Status Task') }}
{{ Form::select('statusTask', array('0' => 'Pending', '1' => 'Finished')) }}
{{ Form::submit('Update',array('class'=>'button')) }}
{{ Form::close() }}
@stop