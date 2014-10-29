@extends('layouts.default')
@section('content')
<h1>Edit Team Member</h1>
{{ Form::model($teammember, array('route' => ['teammembers.update', $teammember->id], 'method' => 'PUT') ) }}
{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}
{{ Form::label('lastname', 'LastName') }}
{{ Form::text('lastname') }}
{{ Form::label('email', 'E-Mail') }}
{{ Form::text('email') }}
{{ Form::submit('Update',array('class'=>'button')) }}
{{ Form::close() }}
@stop