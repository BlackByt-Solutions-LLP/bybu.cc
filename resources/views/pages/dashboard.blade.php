<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex justify-between items-center ">

            <div class="w-20 h-screen flex flex-col justify-between items-center py-4 bg-gray-900">
                <div>
                    <img src="{{asset('images/logo.png')}}" class="w-8">
                </div>
                <div class="space-y-5 flex flex-col justify-between items-center">
                    <button class="bg-gray-700 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <button class="bg-gray-700 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                    <button class="bg-gray-700 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="w-4/6  h-screen space-x-8 bg-gray-800">
                <div class="p-5 space-x-8 border-b-2 border-gray-700 h-16">
                    <a href="">Links</a>
                    <a href="">Appearance</a>
                    <a href="">Settings</a>
                    <a href="">Pro</a>
                </div>
                <div class="mt-5 justify-center">
                    <button type="submit" class="bg-white text-black w-2/3 rounded-lg p-3 mt-10 mx-10">Add new link</button>
                    <button type="submit" class="bg-white text-black w-20 rounded-lg p-3 mt-10 -mx-8">Link</button>
                </div>
            </div>

            <div class="h-screen w-1/3 bg-gray-900">
                <div class="flex p-5 justify-between items-center bg-gray-800 h-16">
                    <div>My link:http://linkr.ee/diah122</div>
                    <a href="#" class="text-sm bg-red-600 px-4 py-1 rounded-md">Share</a>
                </div>

                <div class="w-3/4 mx-auto h-4/5">
                    <div class="border-2 border-gray-200 rounded-3xl h-full mt-3 p-3">
                        <h3 class="text-white text-center">@Diah122</h3>
                    </div>
                </div>
            </div> 

        </div>
    </div>

</x-app-layout>

