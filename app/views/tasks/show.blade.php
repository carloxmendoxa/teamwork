@extends('layouts.default')
@section('content')
<h1>
  {{{ $task->title . ' (' . $task->duration . ' Hours)' }}}
</h1>
{{{ 'Start Task: '$task->startDate . ', End Task: ' . $task->endDate }}}

@if($task->statusTask==0)
{{{ 'Inactive' }}}
@else
{{{ 'Active' }}}
@endif

@stop