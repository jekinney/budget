
<nav class="nav flex-column">
    <a href="{{ route('home') }}" class="nav-link">Home</a>
    @if( Auth::check() )
        <a href="#" class="nav-link">Link</a>
        <a href="#" class="nav-link">Logout</a>
    @else
        <a href="{{ route('login') }}" class="nav-link">Login</a>
        <a href="{{ route('register') }}" class="nav-link">Register</a>
    @endif
</nav>
