@extends('layouts.master')


@section('content')
    <h1>{{ $team -> name }}</h1><br>
    <p>
        {{ $team -> email }}<br>
        {{ $team -> adress }}<br>
        {{ $team -> city }}<br>
    </p>

    @if(count($team->players))
            <div style="background-color: #efeff5; padding: 2rem; border-radius: 2rem; margin: 2rem 0;">
                <h4 style="color:#400000">Players: </h4><hr>
                    <ul>
                        @foreach ($team->players as $player)
                            <li>
                                <p>
                                    <a href="/players/{{ $player->id}}">
                                        {{ $player->first_name }}
                                    </a>
                                </p>
                                
                            </li>
                        @endforeach  
                    </ul>
            </div>
    @endif
@endsection


