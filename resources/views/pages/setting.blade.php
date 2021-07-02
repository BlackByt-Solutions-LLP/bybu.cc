<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex justify-between items-center ">

            @include('pages.sidebar')

            <div class="w-4/6 h-screen bg-gray-800 overflow-y-auto">

                <div class="space-x-8 border-b-2 border-gray-700 flex px-8 h-16">
                    <a class="items-center flex" href="{{route('dashboard')}}">Dashboard</a>
                    <a class="items-center flex">Appearance</a>
                    <a class="items-center flex border-b-4 border-red-700" href="{{route('setting')}}">Settings</a>
                    <a class="items-center flex">Pro</a>
                </div>

                <div class="details w-3/4 mx-auto py-20">
                    <div class="avatar flex items-center">

                        <form action="{{route('updateAvatar', $user->id)}}" method="POST" class="relative" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <img class="h-36 w-36 rounded-full shadow-xl border-4 border-gray-300" src="/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                            <div class="absolute top-0 right-0 bg-gray-700 bg-opacity-75 hover:bg-opacity-100 rounded-full p-2 cursor-pointer">
                                <label for="avatar" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </label>
                                <input type="file" name="avatar" id="avatar" class="hidden" onchange="form.submit()">
                            </div>
                        </form>

                        <div class="ml-8">
                            <div class="text-2xl">{{$user->name}}</div>
                            <div class="text-gray-400">https://bybu.cc/{{$user->slug}}</div>
                        </div>
                    </div>

                    <div class="my-16">
                        <!-- Check URL -->
                        <form action="{{route('updateAccount', $user->id)}}" method="POST" class="w-full mb-12">
                            @csrf
                            @method('PUT')
                            <div class="field-group flex gap-5">
                                <div class="bg-white w-full text-black rounded-lg flex items-center @error('slug') border-2 border-red-500 @enderror">
                                    <div class="py-3 px-3 bg-gray-300 text-gray-600 font-bold rounded-md">https://bybu.cc/</div>
                                    <input type="text" placeholder="username" value="{{$user->slug}}" name="slug" class="py-3 w-full rounded-lg outine-none border-none focus:outline-none focus:border-none focus:ring-0">
                                    @error('slug')
                                        <div class="text-gray-500 w-1/3 flex items-center text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            <span class="ml-1">Not available</span>
                                        </div>
                                    @enderror
                                </div>
                                    
                                <button type="submit" class="bg-red-600 py-3 text-white rounded-lg w-1/3">Set URL</button>
                            </div>
                        </form>
                        
                        <!-- Update Details -->
                        <h2 class="mb-4 border-l-4 border-red-600 pl-3 text-gray-300">UPDATE ACCOUNT</h2>
                        <form action="{{route('updateAccount', $user->id)}}" method="POST" class="w-full">
                            @csrf
                            @method('PUT')
                            <div class="grid gap-4 grid-cols-2">
                                <div class="field-group">
                                    <label class="text-gray-400">Name</label>
                                    <input type="text" placeholder="You Name" name="name" value="{{$user->name}}" class="text-gray-800 w-full py-3 rounded-lg outine-none border-none focus:ring-0">
                                </div>
                                <div class="field-group">
                                    <label class="text-gray-400">Email</label>
                                    <input type="email" placeholder="name@company.com" name="email" value="{{$user->email}}" class="text-gray-800  w-full py-3 rounded-lg outine-none border-none focus:ring-0">
                                </div>
                                <div class="field-group">
                                    <label class="text-gray-400">Contact Number</label>
                                    <input type="text" placeholder="91-9988776655" value="{{$user->mobile}}" name="mobile" class="text-gray-800 w-full py-3 rounded-lg outine-none border-none focus:ring-0">
                                </div>
                                <div class="field-group">
                                    <label class="text-gray-400">Website (if any)</label>
                                    <input type="text" placeholder="www.website.com" value="{{$user->website}}" name="website" class="text-gray-800 w-full py-3 rounded-lg outine-none border-none focus:ring-0">
                                </div>
                            </div>

                            <button type="submit" class="bg-red-600 py-3 text-white rounded-lg w-full mt-8">Save Updates</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="h-screen w-1/3 bg-gray-900">
                <div class="flex p-5 justify-between items-center bg-gray-800 h-16">
                    <div class="border-2 border-gray-700 rounded-md flex"> 
                        <span class="bg-gray-700 px-4 py-2 rounded-sm">Your link</span>
                        <div class="ml-2 pl-4 py-2">https://bybu.cc/</div>
                        <span class="text-red-500 pr-5 font-bold py-2">{{$user->slug}}</span>
                    </div>
                    <a href="#" class="text-sm bg-red-600 px-4 py-1 rounded-md">Share</a>
                </div>

                <div class="w-3/5 mx-auto h-3/4 pt-20">
                    <div class="border-4 border-gray-200 rounded-3xl h-full p-3" style="background: url('/images/bg.jpg');background-size: cover; " >
                        <img class="h-32 w-32 rounded-full shadow-xl" src="/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                        <div class="font-bold mt-3 pl-4">Vimal Bharti</div>

                        <div class="social-links mt-20 grid grid-cols-2 gap-4">
                            <a href="#" class="h-28 bg-indigo-500 bg-opacity-50 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </a>
                            <a href="#" class="h-28 bg-red-500 bg-opacity-75 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                </svg>
                            </a>
                            <a href="#" class="h-28 bg-black bg-opacity-75 rounded-lg flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </a>
                            <a href="#" class="h-28 bg-yellow-500 bg-opacity-50 rounded-lg flex justify-center items-center">
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

