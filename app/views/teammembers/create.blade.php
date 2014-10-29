@extends('layouts.default')
@section('content')
<h1>Create Team Member</h1>
{{ Form::open(array('route' => 'teammembers.store')) }}
{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}
{{ Form::label('lastname', 'LastName') }}
{{ Form::text('lastname') }}
{{ Form::label('email', 'E-Mail') }}
{{ Form::text('email') }}
{{ Form::submit('Create',array('class'=>'button')) }}
{{ Form::close() }}
@stop