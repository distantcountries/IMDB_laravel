<h3>Hello {{ $user->name }} </h3>

<p>Please open link bellow for confirmation:</p>
<a href="/verification/{{ $user->id }}">
    Confirmation
</a>