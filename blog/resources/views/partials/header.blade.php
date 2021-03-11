<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">Laravel Guide</a>
            <ul class="nav navbar-nav">
            @if(!Auth::check())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                <li><a href="{{ route('admin.index') }}">Admin</a></li>
                <li><a href="{{ route('other.about') }}">About</a></li>
              
                <li><a href="{{url('/logout')}}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <!-- <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link> -->
                        </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>