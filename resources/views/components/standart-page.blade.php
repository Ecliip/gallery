<x-header/>

    <main class="w-screen flex flex-row justify-center min-h-full">

        <article class="w-2/4 min-h-full bg-indigo-100 h-full py-20 px-15 rounded-lg">
            @if($article)
                <h2 class="text-center text-2xl uppercase mb-5">{{$article->title}}</h2>
                <p>{{$article->body}}</p>
            @endif
            <div class="flex flex-row">
                @if(!$article)
                    <form class="mx-5"  method="GET" action={{route('articles.create')}}>
                        @csrf
                            <input type="hidden" name="section" value={{$section}}>
                            <button class=" py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75" type="submit">Add article</button>
                    </form>
                @else
                    <form method="GET" action={{route('articles.edit', $article->id)}}>
                        @csrf
                        <input type="hidden" name="section" value={{$section}}>
                        <button class="my-5 py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75" type="submit">Edit article</button>

                    </form>
                    <form method="POST" action={{route('articles.destroy', $article->id)}}>
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="my-5 py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75" >Delete</button>
                    </form>
                @endif
            </div>
        </article>



    </main>

<x-footer/>
