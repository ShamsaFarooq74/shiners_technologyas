<ul class="navbar-nav ms-auto">
    <li class="nav-item"><a href="" class="nav-link">{{ Auth::user()->name }}</a></li>
    <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
