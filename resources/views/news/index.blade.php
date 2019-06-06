@extends('layouts.master')

@section('content')

    @foreach ($user->news as $new)
        {{ $new->title }}
    @endforeach

@endsection