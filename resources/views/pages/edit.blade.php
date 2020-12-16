<x-header/>

<main class="w-screen flex flex-row justify-center h-full" >

    <form class="py-20 flex flex-col items-center w-3/4 bg-indigo-100 h-full" method="POST" action={{route('articles.update', $article->id)}}>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <h1>Edit an existing article</h1>
        <div class="flex flex-col w-1/2 mb-5">
            <label class="mb-3 ml-10" for="title">Title</label>
            <input class="w-full px-2 py-3 rounded-lg"  value="{{$article->title}}" type="text" name="title" placeholder="Article title..." id="title">
        </div>
        <div class="flex flex-col w-1/2">
            <label class="mb-3 ml-10" for="body">Write article</label>
            <textarea class="w-full py-5 px-10 rounded-lg" rows=15 id="body" name="body" placeholder="Write your article...">{{$article->body}}</textarea>
        </div>
        <input type="hidden" name='section' value={{app('request')->input('section')}}>
        <button class="my-5 py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Submit</button>
    </form>
</main>
<x-footer/>
