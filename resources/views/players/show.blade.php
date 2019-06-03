@extends('layouts.master')

@section('content')

    <h1>{{$player->first_name}}</h1> <br>
    <p>
        {{$player->email}}<br>

        <a href="/teams/{{ $player->team->id }}">
            {{$player->team->name}}
        </a>
        
    </p>

@endsection
