<x-header/>
<main class="w-screen flex flex-row justify-center h-full" >
    <form class="flex flex-col items-center w-3/4 bg-indigo-100 h-full" method="POST" action={{route('articles.store')}}>
        @csrf
        <h1>{{app('request')->input('section')}}</h1>
        <div class="flex flex-col w-1/2 mb-5">
            <label for="title">Title</label>
            <input class="w-full" type="text" name="title" placeholder="Article title..." id="title">
        </div>
        <div class="flex flex-col w-1/2">
            <label for="body">Write article</label>
            <textarea class="w-full" rows=15 id="body" name="body" placeholder="Write your article..."></textarea>
        </div>
        <input type="hidden" name='section' value={{app('request')->input('section')}}>
        <button type="submit">Send</button>
    </form>
</main>
<x-footer/>
