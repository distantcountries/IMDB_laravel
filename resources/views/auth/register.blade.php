@extends('layouts.master')

@section('content')
    <div style="padding:3rem;">
        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label><br>
                <input type="text" id="name" name="name" class="form-control" />
                @include('layouts.errors' , ['fieldTitle' => 'name'])
            </div>

            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" class="form-control" />
                @include('layouts.errors' , ['fieldTitle' => 'email'])
            </div>

            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" class="form-control" />
                @include('layouts.errors' , ['fieldTitle' => 'password'])
            </div>

            <div class="form-group">
                    <label for="password_confirmation">Password confirmation</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" />
                    @include('layouts.errors' , ['fieldTitle' => 'password_confirmation'])
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>

        </form>

    </div>
@endsection



