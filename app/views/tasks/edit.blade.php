@extends('layouts.default')
@section('content')
<h1>Edit Task</h1>
{{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ $errors->first('title','<small class="error">:message</small>') }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description') }}
{{ $errors->first('description','<small class="error">:message</small>') }}
{{ Form::label('duration', 'Duration') }}
{{ Form::number('duration') }}
{{ $errors->first('duration','<small class="error">:message</small>') }}
{{ Form::label('startDate', 'Start Date') }}
{{ Form::text('startDate') }}
{{ $errors->first('startDate','<small class="error">:message</small>') }}
{{ Form::label('endDate', 'End Date') }}
{{ Form::text('endDate') }}
{{ $errors->first('endDate','<small class="error">:message</small>') }}
{{ Form::label('statusTask', 'Status Task') }}
{{ Form::select('statusTask', array('0' => 'Pending', '1' => 'Finished')) }}
{{ $errors->first('statusTask','<small class="error">:message</small>') }}
{{ Form::label('teammember_id', 'Team Member') }}
{{ Form::select('teammember_id',$teammembers) }}
{{ Form::submit('Update',array('class'=>'button')) }}
{{ Form::close() }}
@stop