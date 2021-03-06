@extends('layouts.default')
@section('content')
<h1>Tasks List</h1>
{{ HTML::linkAction('tasks.create','New Task',[],['class'=>'button']) }}

<br/>
  <dl class="accordion" data-accordion>
    <dd class="accordion-navigation">
      <a href="#panel1">Pending</a>
      <div id="panel1" class="content active">
	@foreach($teammembers as $teammember)
	    <div class="columns large-12">
		{{ HTML::linkAction('teammembers.show',$teammember->name . ' ' . $teammember->lastname,[$teammember->id],[]) }}
	    </div>
	    <div class="panel callout radius">
		@foreach($tasks as $task)
		  @if ($task->teammember_id == $teammember->id and $task->statusTask == 0)
		    <div class="row">
			<div class="columns large-11">
			  <div class="columns large-2">
			    Task's id: {{{ $task->id }}}
			  </div>
			  <div class="columns large-8">
			    {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}
			    <br/>
			    Duration: {{{ $task->duration }}} Hours.
			    Start Date: {{{ $task->startDate }}}
			    End Date: {{{ $task->endDate }}}
		   	  </div>
			  <div class="columns large-1">
			    {{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
			  </div>
			  <div class="columns large-1">
			    {{ Form::model($tasks, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
			    {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
			    {{ Form::close() }}
			  </div>
			</div>
		    </div>
		 @endif
	     @endforeach
	   </div>
      	 @endforeach	
      </div>
    </dd>

    
    <dd class="accordion-navigation">
      <a href="#panel2">Finished</a>
      <div id="panel2" class="content">
	@foreach($teammembers as $teammember)
	  <div class="columns large-12">
	    {{ HTML::linkAction('teammembers.show',$teammember->name . ' ' . $teammember->lastname,[$teammember->id],[]) }}
	 </div>
	 <div class="panel callout radius">
	   @foreach($tasks as $task)
	     @if ($task->teammember_id == $teammember->id and $task->statusTask == 1)
	       <div class="row">
		 <div class="columns large-11">
		   <div class="columns large-2">
		     Task's id: {{{ $task->id }}}
		   </div>
		   <div class="columns large-8">
		     {{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}
		     <br/>
		     Duration: {{{ $task->duration }}} Hours.
		     Start Date: {{{ $task->startDate }}}
		     End Date: {{{ $task->endDate }}}
		   </div>
		   <div class="columns large-1">
		     {{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
		   </div>
		   <div class="columns large-1">
		     {{ Form::model($tasks, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
		     {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
		     {{ Form::close() }}
		   </div>
	         </div>
	       </div>
	     @endif
	   @endforeach
	 </div>
       @endforeach
     </div>
   </dd>

  </dl>
<br/>
@stop
