@extends('home.layout')

@section('main')

<h1>About</h1>
{{ print_r($users) }}
<br />
@foreach($users as $user)
    <li>{{ $user->name }} : {{ $user->Roles->role }}</li>
@endforeach

<br />

{!! print_r(get_class_methods($errors)) !!}
<br />


{!! Form::open(['url' => 'form']) !!}
{!! Form::text('username') !!}
{!! $errors->first('username') !!}
<br />
{!! Form::text('sername') !!}
{!! $errors->first('sername') !!}
<br />
{!! Form::select('animal',[
    'Cats' => ['leopard' => 'Leopard'],
    'Dogs' => ['spaniel' => 'Spaniel'],
]) !!}
{!! Form::submit('Submit') !!}
    ...
{!! Form::close() !!}


{{-- PAgination displaying --}}
{{ $users->appends(['sort' => 'votes'])->links() }}

@stop

@section('footer')
<footer>footer</footer>
@stop