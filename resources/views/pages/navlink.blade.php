<div class="space-x-8 border-b-2 border-gray-700 flex px-8 h-16">
    <a class="items-center flex {{ (request()->is('dashboard*')) ? 'border-b-4 border-red-700' : '' }}" href="{{route('dashboard')}}">Dashboard</a>
    <a class="items-center flex {{ (request()->is('setting*')) ? 'border-b-4 border-red-700' : '' }}" href="{{route('setting')}}">Settings</a>
    <a class="items-center flex {{ (request()->is('appearance*')) ? 'border-b-4 border-red-700' : '' }}" href="{{route('allLayout')}}">Appearance</a>
    <a class="items-center flex">Contact</a>
</div>