@extends('layouts.default')

@section('content')
    <h1>{{ $user->name() }}</h1>

    @if ($user->githubUsername())
        <a href="https://github.com/{{ $user->githubUsername() }}">Github</a>
    @endif
@stop
