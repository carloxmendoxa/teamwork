@extends('layouts.default')
@section('content')
<h1>
  {{{ $teammember->name . ' ' . $teammember->lastname }}}
</h1>
{{{ $teammember->email }}}
@stop