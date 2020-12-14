<x-header/>

<main class="w-screen flex flex-row justify-center h-full" >
   <form class="w-1/3 flex flex-col items-center">
       <div class="mb-5 w-full flex flex-col items-between">
           <label class="mr-5" for="email">Email</label>
           <input class="px-3 py-2 border-gray border-solid border-2" type="email" name="email" id="email" placeholder="example@gmail.com">
       </div>
       <div class=" w-full flex flex-col items-between">
           <label class="mr-5" for="password">Password</label>
           <input class="px-3 py-2 border-gray border-solid border-2" type="password" name="password" id="password" placeholder="password">
       </div>
       <button class="my-5 py-2 px-4 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Login</button>
   </form>
</main>


<x-footer/>
