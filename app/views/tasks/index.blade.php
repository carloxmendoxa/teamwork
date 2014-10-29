@extends('layouts.default')
@section('content')
<h1>Tasks List</h1>
{{ HTML::linkAction('tasks.create','New Task',[],['class'=>'button']) }}
@foreach($tasks as $task)
  <div class="row">
    <div class="columns large-11">
      {{ HTML::linkAction('tasks.show',$task->title . ' (' . $task->duration . ' Hours)',[$task->id],[]) }}<br>
      {{ 'Start Task: '. $task->startDate . ' End Task: ' . $task->endDate }}
      @if($task->statusTask==0)
	    {{{ 'Inactive' }}}
	  @else
		{{{ 'Active' }}}
	  @endif
    </div>
    <div class="columns large-1">
      {{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
      {{ Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
      {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
      {{ Form::close() }}
    </div>
  </div>
  <hr>
@endforeach
@stop