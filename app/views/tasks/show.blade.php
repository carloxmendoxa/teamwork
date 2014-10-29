@extends('layouts.default')
@section('content')
<h1>
  {{{ $task->title . ' (' . $task->duration . ' Hours)' }}}
</h1>
{{ $task->description }}
<br/>
<medium><b>{{ 'Start Task: ' }}</b>{{ $task->startDate }}</medium>
<medium><b>{{ 'End Task: ' }}</b>{{ $task->endDate }}</medium>
@if($task->statusTask==0)
  {{{ 'Pending' }}}
@else
  {{{ 'Finished' }}}
@endif
@stop