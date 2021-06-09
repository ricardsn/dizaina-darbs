@extends('layout.mainlayout')
@section('content')
    <body class="antialiased welcome">
    @include('Header.header')
    <div class="welcome-block">
        <div class="welcome-text">
            <div class="welcome-content">
                <div class="line"></div>
                <h1 class="welcome-content-title">{{ __('Mans ceļš no mājām uz') }} <br/> {{ __('Latvijas Universitāti...') }}</h1>
            </div>
            <button class="welcome-story" onclick="window.location.href='/{{  app()->getLocale() }}/about'">{{ __('Mans stāsts')  }}</button>
        </div>
        <div class="hero-img"></div>
    </div>
    </body>
@endsection
<b></b>
