{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Gallery</title>--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">--}}
{{--    <!-- Fonts -->--}}

{{--    <!-- Styles -->--}}
{{--</head>--}}
{{--    <div class="flex flex-col items-center justify-center">--}}
{{--        <h1>{{$painting->title}}</h1>--}}
{{--        <div class="">--}}
{{--            <img class="max-w-full" src="{{asset('storage/'.$painting->path_lg)}}">--}}
{{--        </div>--}}
{{--        <p>Description: {{$painting->description}}</p>--}}
{{--        <p>Date: {{$painting->date}}</p>--}}
{{--        <p>Materials: {{$painting->materials}}</p>--}}
{{--        <div>--}}
{{--            <a href="{{route('paintings.edit', $painting->id)}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Edit painting</a>--}}
{{--            <a href="{{route('paintings.update', $painting->id)}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Delete painting</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</html>--}}

<div class="flex flex-col items-center justify-start w-full">
    <h1 id="heading-intro">Choose an image</h1>
    <h1 class="mb-5" id="title"></h1>
    <div class="mb-10">
        <img id="image" class="max-w-full" src=''>
    </div>
    <p class="mb-5" id="description"></p>
    <p class="mb-5" id="date"></p>
    <p class="mb-5" id="materials"></p>
    <div id="buttons" class="hidden">
        {{--            TODO check if the routes are correct--}}
        <a id="btn-edit" href="{{route('paintings.edit', $painting->id)}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Edit painting</a>
        <form id="form-destroy" method="POST" action="">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Delete Painting</button>
        </form>

    </div>
</div>
