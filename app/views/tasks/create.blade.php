@extends('layouts.default')
@section('content')
<h1>Create Task</h1>
{{ Form::open(array('route' => 'tasks.store')) }}
{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}
{{ $errors->first('title','<small class="error">:message</small>') }}
{{ Form::label('description', 'Description') }}
{{ Form::textarea('description') }}
{{ $errors->first('description','<small class="error">:message</small>') }}
{{ Form::label('duration', 'Duration') }}
{{ Form::number('duration', '1') }}
{{ $errors->first('duration','<small class="error">:message</small>') }}
{{ Form::label('startDate', 'Start Date') }}
{{ Form::text('startDate') }}
{{ $errors->first('startDate','<small class="error">:message</small>') }}
{{ Form::label('endDate', 'End Date') }}
{{ Form::text('endDate') }}
{{ $errors->first('endDate','<small class="error">:message</small>') }}
{{ Form::label('statusTask', 'Status Task') }}
{{ Form::select('statusTask', array('0' => 'Pending', '1' => 'Finished'), '0') }}
{{ $errors->first('statusTask','<small class="error">:message</small>') }}
{{ Form::select('teammember_id',$teammembers) }}
{{ Form::submit('Create',array('class'=>'button')) }}
{{ Form::close() }}
@stop