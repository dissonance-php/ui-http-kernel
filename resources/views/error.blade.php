@extends('layout')
<h1 style="font-size: 7em; margin-bottom: 30px">{{$response->getStatusCode()}}</h1>
<p style="font-size: 2em">{{$response->getReasonPhrase()}}</p>
