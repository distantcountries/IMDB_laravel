@extends('layouts.master')

@section('content')

    <div style="width:40%;">
        <form method="POST" action="/register">
            {{ csrf_field() }}
            <h1>Register</h1>
            <br>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" name="name" class="form-control" placeholder="Your name">
                @include('partials.error-message' , ['fieldTitle' => 'name'])
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Your email">
                @include('partials.error-message' , ['fieldTitle' => 'email'])
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Your password">
                @include('partials.error-message' , ['fieldTitle' => 'password'])
            </div>

            <div class="form-group">
                <label for="password-confirm">Password confirmation</label>
                <input type="password" name="password-confirm" class="form-control" placeholder="Your password">
                @include('partials.error-message' , ['fieldTitle' => 'password-confirm'])
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>


        <!-- @if(count($errors->all()) > 0)
            @foreach ($errors->all() as $error)
                <div class="form-grup">
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif -->

    </div>












@endsection