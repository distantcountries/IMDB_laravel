@extends('layouts.master')


@section('content')

    <!-- Poruka dok smo ulogovani -->
        @if(Auth::check())
            <p style="font-weight: bold;"> 
                {{ Auth()->user()->name }}  is logged in!
            </p>
        @endif
    <!-- --- -->

    <!-- Poruka ako nismo ulogovani -->
    @if(!Auth::check())
            <p style="font-weight: bold;"> 
                Please login for more content!
            </p>
        @endif
    <!-- --- -->

    <ul>
        @foreach( $teams as $team )
            <li>
                <a href="/teams/{{ $team->id }}">
                    {{ $team->name }}
                </a>
            </li>
        @endforeach
    </ul>



@endsection