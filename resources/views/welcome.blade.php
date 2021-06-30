<x-app-layout>
    <div style="background: url('images/bg.svg')">

        <nav x-data="{ open: false }" >
            <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <span>Bybu.cc</span>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            
                            <a href="{{ route('dashboard') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                            <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                            <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                            <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    @if (Route::has('login'))
                        @auth
                            <button class="mr-4 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="ml-3 relative">
                                <div>
                                    <a href="{{route('dashboard')}}"  class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </a>
                                </div>
                                <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="px-5 bg-gradient-to-r from-red-700 via-red-500 to-red-600 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Login</a>
                        @endauth
                    @endif
                </div>

            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
                </div>
            </div>

        </nav>
        <!-- Navbar Ends -->

        
        <!-- Hero-area -->
        <div class="hero-area flex justify-center items-center h-full">
            <div class="text-gray-300 w-1/2">
                <div class="text-6xl font-bold mb-10">We Make Brands, <br> We Design Growth.</div>
                <div class="text-xl mb-10">The best idea for your business, and will <br> work with you to create a design <br> that grows your company.</div>
                <div class="flex gap-8">
                    <a href="#" class="rounded-full py-6 px-12 bg-gradient-to-r from-red-700 via-red-500 to-red-600">Contact Us</a>
                    <a href="#" class="rounded-full py-6 px-12 border-2 text-gray-300">Pricing Plan</a>
                </div>
            </div>
            <div class="relative">
                <img src="{{asset('images/1.png')}}">
                <div class="absolute bottom-10 left-0 w-80 bg-black bg-opacity-75 px-6 py-6 rounded-lg text-gray-300" style="backdrop-filter: blur(10px);">
                    <div class="text-sm">"Haruki Design, helping me for branding strategy. And this is Amazing super deuper team. Thanks you Haruki Design"</div>
                    <div class="flex justify-between mt-4">
                        <div><img class="h-8 w-8 rounded-full border-2 border-gray-300" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></div>
                        <div>
                            <div class="text-right">Jane Dyana</div>
                            <div class="text-gray-400 italic">CEO at milkyjahe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="center-area py-28">
        <div class="hero-area flex justify-center items-center h-full">
            <div class="text-gray-300 w-1/2">
                <div class="text-6xl font-bold mb-10">One Link, <br> For Everything</div>
                <div class="text-xl mb-10">Combine all your content into one link.</div>
                <div class="text-xl mb-10">Share multiple links at once in a beautiful way and track its performance.</div>
                <div class="flex gap-8">
                    <a href="#" class="rounded-full py-6 px-12 bg-gradient-to-r from-red-700 via-red-500 to-red-600">Start Now</a>
                </div>
            </div>
            <div class="relative px-20">
                <div class="screen w-80 p-3 rounded-lg h-full bg-gray-100" style="backdrop-filter: blur(40px);">
                    <div class="flex justify-between bg-white mt-4 shadow-xl rounded-lg p-2 mb-2">
                        <div><img class="h-12 w-12 rounded-full border-2 border-gray-300" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></div>
                        <div>
                            <div class="text-right">Jane Dyana</div>
                            <div class="text-gray-400 italic">CEO at milkyjahe</div>
                        </div>
                    </div>
                    <div class="flex justify-between bg-white mt-4 shadow-xl rounded-lg p-2 mb-2">
                        <img src="{{asset('images/4.jpg')}}">
                    </div>
                    <div class="text-center mt-5 mb-4">
                        <button class="px-4 py-2 rounded-full text-white text-sm bg-gradient-to-r from-red-700 via-red-500 to-red-600">Shop Now</button>
                    </div>
                    <div class="mb-2">
                        <img src="{{asset('images/social.png')}}">
                    </div>
                </div>
                <div class="float-links">
                    <button class="absolute top-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </button>
                    <button class="absolute top-40 left-3 bg-pink-700 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-100" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                        </svg>
                    </button>

                    <!-- Social Icons -->
                    <button class="absolute top-20 right-6 bg-pink-700 rounded-lg p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </button>

                    <button class="absolute top-40 right-6 bg-blue-600 rounded-lg p-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </button>

                    <button class="absolute top-60 right-6 bg-red-600 rounded-lg p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </button>

                    <button class="absolute top-80 right-6 bg-blue-400 rounded-lg p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer area -->
    <footer>
        <div class="flex max-w-7xl mx-auto py-12 justify-between">
            <div class="w-2/5">
                <div>Bybu.cc</div>
                <div class="text-gray-300">Haruki desgign i sthe first expereince driven design agency for brand who want to make an impact on their customers and when youre not aiming your products or services at a mass market, you need something different from a traditional ad agency.</div>
            </div>

            <div class="">
                <div class="text-gray-300 space-x-8 mb-6">
                    <a href="#">About Me </a>
                    <a href="#">Our Team </a>
                    <a href="#">Our Study Case </a>
                    <a href="#">Careers </a>
                </div>
                <div class="text-gray-300 mb-6 text-right">
                    Email:  business@blackbyt.com
                </div>
                <div>
                    <img src="{{asset('images/social.png')}}">
                </div>
            </div>
        </div>
        <div class="flex justify-between max-w-7xl mx-auto py-3">
            <div class="flex text-gray-300">&copy; 
                2021 with 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                BlackByt. All rights reserved
            </div>
            <div class="space-x-8 text-gray-300">
                <a href="#">Privacy & Policy</a>
                <a href="#">Terms</a>
            </div>
        </div>
    </footer>
</x-app-layout>
