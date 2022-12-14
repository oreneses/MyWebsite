<nav class="navbar navbar-expand-md bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row justify-content-end">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills">
                    <li class="nav-item"> 
                        <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}"> 
                            @lang('Home')
                        </a>
                    </li>
                    <li class="nav-item" > 
                        <a class="nav-link {{ setActive('profile.*') }}" href="{{ route('profile.index') }}"> 
                            @auth
                                @lang('Profile')
                            @else
                                @lang('Profiles')
                            @endauth
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}"> 
                            @lang('Projects')
                        </a>
                    </li>
                @guest
                    <li class="nav-item"> 
                        <a class="nav-link {{ setActive('contact') }}" href="{{route('contact') }}">
                            @lang('Contact') 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">
                            @lang('Login')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">
                            @lang('Register')
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            @lang('Logout')
                        </a>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
        
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
