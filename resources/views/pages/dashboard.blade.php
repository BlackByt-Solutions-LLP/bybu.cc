<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex justify-between items-center ">

            @include('pages.sidebar')

            <div class="w-4/6  h-screen space-x-8 bg-gray-800">

                <div class="space-x-8 border-b-2 border-gray-700 flex px-8 h-16">
                    <a class="items-center flex border-b-4 border-red-700" href="{{route('dashboard')}}">Dashboard</a>
                    <a class="items-center flex">Appearance</a>
                    <a class="items-center flex" href="{{route('setting')}}">Settings</a>
                    <a class="items-center flex">Pro</a>
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

                <div class="w-3/5 mx-auto h-3/4 pt-20">
                    <div class="border-4 border-gray-200 rounded-3xl h-full p-3" style="background: url('/images/bg.jpg');background-size: cover; " >
                        <img class="h-32 w-32 rounded-full shadow-xl" src="/images/avatar/{{ $user->avatar }}" alt="">
                        <div class="font-bold mt-3 pl-4">{{ $user->name }}</div>

                        <div class="social-links mt-4 grid grid-cols-2 gap-4 h-2/4">
                            <a href="#" class="h-full bg-indigo-500 bg-opacity-50 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </a>
                            <a href="#" class="h-full bg-red-500 bg-opacity-75 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                </svg>
                            </a>
                            <a href="#" class="h-full bg-black bg-opacity-75 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </a>
                            <a href="#" class="h-full bg-yellow-500 bg-opacity-50 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div> 

        </div>
    </div>

</x-app-layout>

