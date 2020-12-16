<x-header/>
<form method="POST" action="{{route('paintings.update', $painting->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="title">Title</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="title" id="title" placeholder="Title" value="{{$painting->title}}">
    </div>
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="description">Description</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="description" id="description" placeholder="Description" value="{{$painting->description}}">
    </div>
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="date">Date</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="date" name="date" id="date" value="{{$painting->date}}">
    </div>
    <div class=" w-full flex flex-col items-between">
        <label class="mr-5" for="materials">Materials</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="materials" id="materials" placeholder="oil, brush..." value="{{$painting->materials}}">
    </div>
    <button class="my-5 py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Update painting</button>
</form>
<x-footer />
