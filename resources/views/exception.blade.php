@extends('layout')
@section('title')
Error: {{$error->getMessage()}}
@stop
<div class="center">
    <h1>Error: #{{$error->getCode()}} {{$error->getMessage()}}</h1>
    <p style="text-align: left;">{!! nl2br($error->getTraceAsString()) !!}</p>
</div>