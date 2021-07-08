<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex">
            <div class="w-3/5 p-4 h-screen overflow-y-auto">
                <div class="grid grid-cols-2 gap-6 h-auto">   
                    @foreach($layouts as $layout)
                        <div class="p-12 relative h-screen rounded-md overflow-y-auto bg-red-400" 
                            style="background: url('{{ $layout->bgImage }}');background-size: cover;" 
                        >
                            <div class="{{ $layout->profileImageDiv }}" id="profileImageDiv">
                                <img class="{{ $layout->profileImage }}" id="profileImage" src="/avatars/default.png">
                            </div>
                            <div class="{{ $layout->userDetailsDiv }}" id="userDetailsDiv">
                                <div class="{{ $layout->userNameDiv }}" id="userNameDiv">
                                    <div class="{{ $layout->userName }}" id="userName">User Name</div>
                                    <div class="{{ $layout->userAbout }}" id="userAbout">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                </div>
                            </div>
                            
                            <div class="{{ $layout->linksContainer }}" id="linksContainer">
                                <div class="{{ $layout->linksDiv }}" id="linksDiv">
                                    <a href="#" target="_blank" class="{{ $layout->linkIcon }}" id="linkIcon">FB</a>
                                    <div class="{{ $layout->linkText }}" id="linkText">www.fb.com</div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>    

            <div class="bg-gray-200 h-screen overflow-y-auto w-2/5">
                <form action="{{route('layouts.store')}}" method="POST" class="p-8">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="primaryColor" class="rounded-md text-gray-800" name="primaryColor">
                        <input type="text" placeholder="secondaryColor" class="rounded-md text-gray-800" name="secondaryColor">
                        <input type="text" placeholder="bgImage" class="rounded-md text-gray-800" name="bgImage">
                        <input type="text" placeholder="bgColor" class="rounded-md text-gray-800" name="bgColor">
                        <input type="text" placeholder="profileImageDiv" class="rounded-md text-gray-800" name="profileImageDiv">
                        <input type="text" placeholder="profileImage" class="rounded-md text-gray-800" name="profileImage">
                        <input type="text" placeholder="userDetailsDiv" class="rounded-md text-gray-800" name="userDetailsDiv">
                        <input type="text" placeholder="userNameDiv" class="rounded-md text-gray-800" name="userNameDiv">
                        <input type="text" placeholder="userName" class="rounded-md text-gray-800" name="userName">
                        <input type="text" placeholder="userAbout" class="rounded-md text-gray-800" name="userAbout">
                        <input type="text" placeholder="linksContainer" class="rounded-md text-gray-800" name="linksContainer">
                        <input type="text" placeholder="linksDiv" class="rounded-md text-gray-800" name="linksDiv">
                        <input type="text" placeholder="linkIcon" class="rounded-md text-gray-800" name="linkIcon">
                        <input type="text" placeholder="linkText" class="rounded-md text-gray-800" name="linkText">
                    </div>
                    <button type="submit" class="mt-6 bg-red-500 text-white py-2 rounded-md w-full">Save Layout</button>
                </form>
            </div>
        </div>


    </div>

</x-app-layout>