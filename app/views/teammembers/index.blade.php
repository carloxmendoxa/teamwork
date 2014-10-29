@extends('layouts.default')
@section('content')
<h1>Team Members List</h1>
{{ HTML::linkAction('teammembers.create','New Team Member',[],['class'=>'button']) }}
@foreach($teammembers as $teammember)
  <div class="row">
    <div class="columns large-11">
      {{ HTML::linkAction('teammembers.show',$teammember->name . ' ' . $teammember->lastname,[$teammember->id],[]) }}<br>
      {{ $teammember->email }}
    </div>
    <div class="columns large-1">
      {{ HTML::linkAction('teammembers.edit','Edit',[$teammember->id],['class'=>'button tiny']) }}
      {{ Form::model($teammember, ['route' => ['teammembers.destroy', $teammember->id], 'method' => 'DELETE' ]) }}
      {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
      {{ Form::close() }}
    </div>
  </div>
  <hr>
@endforeach
@stop