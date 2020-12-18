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
        @if(Auth::check())
            <a id="btn-edit" href="" class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Edit painting</a>

        <form id="form-destroy" method="POST" action="">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="w-48 whitespace-nowrap py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Delete Painting</button>
        </form>
        @endif
    </div>
</div>
