<div class="w-20 h-screen flex flex-col justify-between items-center py-4 bg-gray-900">
    <div>
        <img src="{{asset('images/logo.png')}}" class="w-8">
    </div>
    <div class="space-y-5 flex flex-col justify-between items-center">
        <button class="bg-gray-700 rounded-full p-1">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
        </button>
        <button class="bg-gray-700 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="bg-gray-700 rounded-full p-2">
            <a :href="route('logout')" 
                onclick="event.preventDefault(); this.closest('form').submit();"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </a>
            </button>
        </form>
        
    </div>
</div>