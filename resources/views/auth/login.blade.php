@extends('layouts.master')

@section('content')

  

    <div style="width:40%;">
        <form method="POST" action="/login">
            {{ csrf_field() }}
            <h1>Login</h1>
            <br>

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

            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>

    </div>



        <!-- @if(count($errors->all()) > 0)
            @foreach ($errors->all() as $error)
                <div class="form-grup">
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif -->







@endsection