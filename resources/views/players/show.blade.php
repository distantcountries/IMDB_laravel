@extends('layouts.master')

@section('content')

    <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
    <p>Email: {{ $player->email }}</p>
    <p>Team: 
        <a href="/teams/{{ $player->team->id }}">
            {{ $player->team->name }}
        </a>
    </p>









@endsection