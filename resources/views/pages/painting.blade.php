
    <div class="flex flex-col items-center justify-center">
        <h1>{{$painting->title}}</h1>
        <div class="">
            <img class="max-w-full" src="{{asset('storage/'.$painting->path_lg)}}">
        </div>
        <p>Description: {{$painting->description}}</p>
        <p>Date: {{$painting->date}}</p>
        <p>Materials: {{$painting->materials}}</p>
        <div>
{{--            TODO check if the routes are correct--}}
            <a href="{{route('paintings.edit', $painting->id)}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Edit painting</a>
            <a href="{{route('paintings.update', $painting->id)}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Delete painting</a>
        </div>
    </div>

