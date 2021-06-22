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
                            <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">All notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                        <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
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
                <img src="{{asset('images/1.png')}}" class="" >
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
                    <a href="#">fb</a>
                    <a href="#">twt</a>
                    <a href="#">you</a>
                    <a href="#">insta</a>
                </div>
            </div>
        </div>
        <div class="flex justify-between max-w-7xl mx-auto">
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
