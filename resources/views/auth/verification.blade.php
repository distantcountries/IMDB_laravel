@extends('layouts.master')

@section('content')
    <h3>Welcome {{ $user->name }}. Please <a href="/login">login!</a></h3>
@endsection