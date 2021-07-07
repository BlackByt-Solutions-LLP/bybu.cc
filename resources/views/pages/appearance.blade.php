<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex justify-between items-center ">

            @include('pages.sidebar')

            <div class="w-4/6 h-screen overflow-y-auto space-x-8 bg-gray-800">

                @include('pages.navlink')

                <div class="my-4 font-bolds">Select Layouts</div>
                <div class="mt-5 grid grid-cols-3 gap-6 pb-16 pr-8">
                    @foreach($layouts as $layout)
                        <form action="{{route('updateLayout', $user->id)}}" method="POST" class="relative">
                            @csrf
                            @method('PUT')
                            <div class="h-96 rounded-lg" style="background: url('{{$layout->bgImage}}');background-size: cover;">
                                <input type="hidden" name="layout_id" value="{{$layout->id}}">
                                <button type="submit" class="h-96 w-full focus:outline-none focus:ring-none"></button>
                            </div>
                        </form>
                    @endforeach
                </div>

            </div>

            <div class="h-screen w-1/3 bg-gray-900 overflow-y-auto">
                <div class="flex p-5 justify-between items-center bg-gray-800 h-16">
                    <div class="border-2 border-gray-700 rounded-md flex"> 
                        <span class="bg-gray-700 px-4 py-2 rounded-sm">Your link</span>
                        <div class="ml-2 pl-4 py-2">https://bybu.cc/</div>
                        <span class="text-red-500 pr-5 font-bold py-2">{{$user->slug}}</span>
                        <div class="pr-2 py-2">
                            <a href="{{route('profile', $user->slug)}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="text-sm bg-red-600 px-4 py-1 rounded-md">Share</a>
                </div>

                <!-- 
                    ================= PREVIEW ===============
                -->

                <!-- <div class="h-full p-12 relative" style="background: url('{{$user->layout->bgImage}}');background-size: cover; " >
                        <div class="{{ $user->layout->profileImageDiv }}">
                            <img class="{{ $user->layout->profileImage }}" src="/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                        </div>
                        <div class="{{ $user->layout->userNameDiv }}">
                            <div class="{{ $user->layout->userName }}">{{$user->name}}</div>
                        </div>
                        
                        <div class="{{ $user->layout->linksContainer }} linksContainer">
                            @foreach($links as $link)
                            <div class="{{ $user->layout->linksDiv }}">
                                <div class="{{ $user->layout->linkIcon }}">{{$link->icon}}</div>
                                <div class="{{ $user->layout->linkText }}">{{$link->link}}</div>
                            </div>
                            @endforeach
                        </div>

                        
                        <div class="bybu-watermark absolute bottom-5 left-0 right-0 flex justify-center font-bold uppercase">
                            <img src="images/logo.png" class="h-6">
                            <span class="ml-2">Bybu</span>
                        </div>
                    </div>
                </div>  -->

                <div class="p-12 relative min-h-screen" style="background: url('{{$user->layout->bgImage}}');background-size: cover; " >
                    <div class="{{ $user->layout->profileImageDiv }}" id="profileImageDiv">
                        <img class="{{ $user->layout->profileImage }}" id="profileImage" src="/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                    </div>
                    <div class="{{ $user->layout->userDetailsDiv }}" id="userDetailsDiv">
                        <div class="{{ $user->layout->userNameDiv }}" id="userNameDiv">
                            <div class="{{ $user->layout->userName }}" id="userName">{{$user->name}}</div>
                            <div class="about text-gray-600 text-sm text-center mt-2" id="userAbout">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab veniam magnam consequuntur iste amet perspiciatis, doloremque minima facere error debitis iure culpa blanditiis dolor cumque molestias quo quibusdam pariatur esse?</div>
                        </div>
                    </div>
                    
                    <div class="{{ $user->layout->linksContainer }}" id="linksContainer">
                        @foreach($links as $link)
                            <div class="{{ $user->layout->linksDiv }}" id="linksDiv">
                                <a href="{{$link->link}}" target="_blank" class="{{ $user->layout->linkIcon }}" id="linkIcon">{{$link->icon}}</a>
                                <div class="{{ $user->layout->linkText }}" id="linkText">{{$link->link}}</div>
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

