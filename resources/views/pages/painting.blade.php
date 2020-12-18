<div class=" bg-gray-400 flex py-5 flex-col items-center justify-start w-full">
    <h1 class="text-2xl" id="heading-intro">Choose an image</h1>
    <h1 class="mb-5 text-2xl italic" id="title"></h1>
    <div class="mb-10">
        <img id="image" class="max-w-full" src=''>
    </div>
    <div>
        <p class="mb-5 text-sm font-medium" id="description"></p>
        <p class="mb-5 text-sm font-medium" id="date"></p>
        <p class="mb-5 text-sm font-medium" id="materials"></p>
    </div>

    <div class="flex flex-col jusify-center items-center w-1/2">
        <a href="{{route('paintings.create')}}" class="mb-3 w-48 whitespace-nowrap py-2 px-4 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Add more paintings</a>
        <div id="buttons" class="hidden ">
            @if(Auth::check())
                <a id="btn-edit" href="" class="mb-3 text-center w-48 whitespace-nowrap py-2 px-4 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Edit painting</a>

                <form id="form-destroy" method="POST" action="">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="mb-3 w-48 whitespace-nowrap py-2 px-4 bg-gray-800 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Delete Painting</button>
                </form>

            @endif
        </div>
    </div>

</div>
