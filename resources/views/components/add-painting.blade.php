<form method="POST" action="{{route('paintings.store')}}" enctype="multipart/form-data">
    @csrf
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="title">Title</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="title" id="title" placeholder="Title">
    </div>
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="description">Description</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="description" id="description" placeholder="Description">
    </div>
    <div class=" w-full flex flex-col items-between mb-5">
        <label class="mr-5" for="date">Date</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="date" name="date" id="date">
    </div>
    <div class=" w-full flex flex-col items-between">
        <label class="mr-5" for="materials">Date</label>
        <input class="px-3 py-2 border-gray border-solid border-2" type="text" name="materials" id="materials" placeholder="oil, brush..." >
    </div>
    <input type="file" name="image" class="mb-5 py-2 px-4 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">
    <button class="my-5 py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Add paintings</button>
</form>
