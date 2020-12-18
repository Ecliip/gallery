<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
{{--    <script src="jquery-3.5.1.min.js"></script>--}}
    <!-- Fonts -->

    <!-- Styles -->

</head>
<body class="flex flex-col justify-between  min-h-screen">
<header class="bg-indigo-900 flex flex-row h-20 items-center px-5 justify-between">
    <div class="mx-5">
        <a>Logo</a>
    </div>
    <nav class="flex-auto flex">
        <ul class="flex flex-row flex-auto justify-center list-none">
            <li class="mr-10"><a href="{{route('home')}}">Home</a></li>
            <li class="mr-10"><a href="{{route('artist')}}">Artist</a></li>
            <li class="mr-10"><a href="{{route('school')}}">School</a></li>
            <li><a href="{{route('paintings.index')}}">Gallery</a></li>
        </ul>
    </nav>
    @if(!Auth::check())
        <a class="mx-5" href={{route('login')}}>Login</a>
    @endif(Auth::check())
    @if(Auth::check())
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                {{ __('Logout') }}
            </x-dropdown-link>
        </form>
    @endif
</header>
