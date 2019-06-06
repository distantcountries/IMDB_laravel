@extends('layouts.master')

@section('content')

    <h1>
        {{ $team->name }}
    </h1>
    <p>Email: {{ $team->email }}</p>
    <p>Adress: {{ $team->adress }}</p>
    <p>City: {{ $team->city }}</p>

    <h3>Players:</h3>


    <ul>
        @foreach( $team->players as $player )
            <li>
                <a href="/players/{{ $player->id }}">
                    {{ $player->first_name }}
                </a>
            </li>
        @endforeach
    </ul>


    <div style="background-color: #efeff5; padding: 2rem; border-radius: 2rem; margin: 2rem 0;">
            <h4 style="color:#400000"> Comments: </h4><hr>
                <ul>
                    @foreach ($team->comments as $comment)
                        <li>
                            <p>
                                {{ $comment->content }}
                            </p>
                            
                        </li>
                    @endforeach  
                </ul>
    </div>

    <div style="width:40%;">
        <form method="POST" action="{{ route('team-comments', ['team_id' => $team->id]) }}">
            {{ csrf_field() }}
            <h1>Write the comment:</h1>
            <br>

            <div class="form-group">
                <label for="content">Content</label>
                <input type="content" name="content" class="form-control" placeholder="Your content">
                @include('partials.error-message' , ['fieldTitle' => 'content'])
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>

    </div>





    
@endsection