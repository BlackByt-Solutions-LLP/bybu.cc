<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex justify-between items-center ">

            @include('pages.sidebar')

            <div class="w-4/6 h-screen bg-gray-800">

                @include('pages.navlink')
                
                <div class="mt-6">
                    <form action="{{route('links.store')}}" method="POST" class="justify-center px-8 mt-12 flex gap-2">
                        @csrf
                        <select name="icon" class="rounded-md text-gray-600">
                            <option selected disabled>Select Icon</option>
                            <option value="FB">Facebook</option>
                            <option value="Twt">Twitter</option>
                            <option value="Insta">Instagram</option>
                            <option value="YT">Youtube</option>
                        </select>
                        <input type="text" name="link" class="bg-white text-black flex-grow rounded-md focus:ring-0" placeholder="Add new link">
                        <button type="submit" class="rounded-md p-3 bg-red-600 text-gray-100">Add Link</button>
                    </form>
                </div>

                <!-- Active Links -->
                <div class="mt-6 justify-center px-8 mt-12">
                    @foreach($links as $link)
                        <div class="flex gap-2 mb-3">
                            <div class="bg-white px-6 rounded-md bg-blue-400 flex items-center">{{$link->icon}}</div>
                            <input type="text" readonly class="bg-white text-black flex-grow rounded-md focus:ring-0" value="{{$link->link}}">
                            <button class="rounded-md p-3 bg-red-600 text-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="h-screen w-1/3 bg-gray-900 overflow-y-auto">
                <div class="flex p-5 justify-between items-center bg-gray-800 h-16">
                    <div class="border-2 border-gray-700 rounded-md flex"> 
                        <span class="bg-gray-700 px-4 py-2 rounded-sm">Your link</span>
                        <div class="ml-2 pl-4 py-2">https://bybu.cc/</div>
                        <span class="text-red-500 pr-5 font-bold py-2">{{$user->slug}}</span>
                    </div>
                    <a href="#" class="text-sm bg-red-600 px-4 py-1 rounded-md">Share</a>
                </div>

            <!-- 
                ================= PREVIEW ===============
             -->

                <div class="h-full p-12 relative" style="background: url('{{$user->layout->bgImage}}');background-size: cover; " >
                    <div class="flex flex-col items-center">
                        <img class="h-32 w-32 rounded-full shadow-xl" src="/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="font-bold mt-3 pl-4 uppercase text-gray-800">{{$user->name}}</div>
                    </div>
                    
                    <div class="mt-12">
                        @foreach($links as $link)
                        <div class="social-links flex rounded-xl mb-4 gap-2">
                            <div class="icon w-1/4 justify-center flex rounded-md py-2 bg-blue-400">{{$link->icon}}</div>
                            <div class="py-2 bg-white rounded-md text text-center w-full text-gray-700">{{$link->link}}</div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Bybu watermark -->
                    <div class="bybu-watermark absolute bottom-5 left-0 right-0 flex justify-center font-bold uppercase">
                        <img src="images/logo.png" class="h-6">
                        <span class="ml-2">Bybu</span>
                    </div>
                </div>
            </div> 

        </div>
    </div>

</x-app-layout>

