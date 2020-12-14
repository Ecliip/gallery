@extends('components.standart');

@section('content')
    <div class="flex flex-col items-center justify-center">
        <h1>{{$painting->title}}</h1>
        <div class="w-1/4">
            <img class="max-w-full" src="{{asset('storage/'.$painting->path_lg)}}">
        </div>
        <p>Description: {{$painting->description}}</p>
        <p>Date: {{$painting->date}}</p>
        <p>Materials: {{$painting->materials}}</p>
    </div>

@endsection
