<x-header/>

<main class="min-h-screen flex flex-row justify-center" >

    {{--    TODO organize paintings when we have some --}}
    @if(!Request::is('paintings/create'))

        <div class="h-full flex flex-col w-full">

            <div class="h-full flex flex-row justify-evenly">
                <div class="flex flex-col h-screen w-1/5 overflow-y-auto">
                    @foreach($paintings as $painting)
{{--                        TODO x-scroll. find out why appears--}}
                       <div onclick="getData({{$painting->id}})" class="flex flex-col cursor-pointer px-3 py-4 mb-5 border-solid border-grey border-b-2 hover:bg-blue-200">
                           <h3 class="text-center mb-2">{{$painting->title}}</h3>
                           <div class="w-24 self-center mb-4">
                               <img class="max-w-full" src="{{asset('storage/'.$painting->path_sm)}}">
                           </div>
                           <p class="text-sm">Year: {{$painting->date}}</p>
                           <p class="text-sm">"{{$painting->description}}"</p>
                       </div>
                    @endforeach
                </div>
{{--                <iframe id="painting-view" class="h-screen w-1/2 flex flex-col items-center justify-center" src="/paintings/14"></iframe>--}}
                <div>

                </div>

            </div>
            <a href="{{route('paintings.create')}}" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Add more paintings</a>
        </div>
    @endif
    @if(Request::is('paintings/create'))
        @include('components.add-painting')
    @endif
</main>


<x-footer/>

<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script>
    function getData(id) {
        // console.log(id);
        // const htmlPaintingView = document.getElementById('painting-view');
        // htmlPaintingView.setAttribute('src', `/paintings/${id}`);

        $.ajax({url: `http://127.0.0.1:8000/paintings/${id}`, success: function(result){
               console.log(result.painting);


            }});
    }
</script>
