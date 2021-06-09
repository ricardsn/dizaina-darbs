<nav class="navbar navbar-expand-lg navbar-light bg-light mobile">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-circle"></div>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <div class="road"></div>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/about">{{ __('Vietnes būtība') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/primary-school">{{ __('Sākumskola') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/games">{{ __('Datorspēles') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/high-school">{{ __('Vidusskola') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/courses">{{ __('Kursi') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/hobbies">{{ __('Vaļasprieki') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="university">{{ __('Universitāte') }}</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto language">
        <li class="nav-item">
            <a class="nav-link lv" href="{{ route(Route::currentRouteName(), 'lv') }}">{{ __('LV') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link en" href="{{ route(Route::currentRouteName(), 'en') }}">{{ __('ENG') }}</a>
        </li>
    </ul>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light desktop">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <div class="navbar-circle"></div>
            <li class="nav-item">
                <a class="nav-link" href="/{{  app()->getLocale() }}/">{{ __('Sākums') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Mans ceļš') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <div class="row">
                        <div class="col-2 column1">
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/about">{{ __('Vietnes būtība') }}</a>
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/primary-school">{{ __('Sākumskola') }}</a>
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/games">{{ __('Datorspēles') }}</a>
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/high-school">{{ __('Vidusskola') }}</a>
                        </div>
                        <div class="col-2 column2">
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/courses">{{ __('Kursi') }}</a>
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/hobbies">{{ __('Vaļasprieki') }}</a>
                            <a class="dropdown-item" href="/{{  app()->getLocale() }}/university">{{ __('Universitāte') }}</a>
                        </div>
                        <div class="line"></div>
                        <div class="road"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav ml-auto language">
        <li class="nav-item">
            <a class="nav-link lv" href="{{ route(Route::currentRouteName(), 'lv') }}">{{ __('LV') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link en" href="{{ route(Route::currentRouteName(), 'en') }}">{{ __('ENG') }}</a>
        </li>
    </ul>
</nav>
