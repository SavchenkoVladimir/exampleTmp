@extends('home.layout')

@section('main')
<br />
<br />
<br />
<br />

{!! var_dump(count($errors->all())) !!}
<br />
{!! $username !!}
<br />
{!! $animal !!}
<br />
<a href="{{ url('about') }}">home</a>

@stop

