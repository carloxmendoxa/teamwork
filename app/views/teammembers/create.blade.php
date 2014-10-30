@extends('layouts.default')
@section('content')
<h1>Create Team Member</h1>
{{ Form::open(array('route' => 'teammembers.store')) }}
{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}
{{ $errors->first('name','<small class="error">:message</small>') }}
{{ Form::label('lastname', 'LastName') }}
{{ Form::text('lastname') }}
{{ $errors->first('lastname','<small class="error">:message</small>') }}
{{ Form::label('email', 'E-Mail') }}
{{ Form::text('email') }}
{{ $errors->first('email','<small class="error">:message</small>') }}
{{ Form::submit('Create',array('class'=>'button')) }}
{{ Form::close() }}
@stop