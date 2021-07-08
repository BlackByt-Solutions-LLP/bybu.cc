<x-app-layout>

    <div class="bg-white h-screen">
        <div class="flex justify-between items-center ">

            <div class="w-1/2 mx-auto text-white">
                <div class="p-12 relative min-h-screen h-auto" style="background: url('{{$slug->layout->bgImage}}');background-size: cover; " >
                    <div class="{{ $slug->layout->profileImageDiv }}" id="profileImageDiv">
                        <img class="{{ $slug->layout->profileImage }}" id="profileImage" src="/avatars/{{$slug->avatar}}" alt="{{$slug->name}}">
                    </div>
                    <div class="bg-white rounded-md p-6 -mt-12" id="userDetailsDiv">
                        <div class="{{ $slug->layout->userNameDiv }}" id="userNameDiv">
                            <div class="{{ $slug->layout->userName }}" id="userName">{{$slug->name}}</div>
                            <div class="about text-gray-600 text-sm text-center mt-2" id="userAbout">{{$slug->about}}</div>
                        </div>
                    </div>
                    
                    <div class="{{ $slug->layout->linksContainer }}" id="linksContainer">
                        @foreach($slug->links as $link)
                            <div class="{{ $slug->layout->linksDiv }}" id="linksDiv">
                                <a href="{{$link->link}}" target="_blank" class="{{ $slug->layout->linkIcon }}" id="linkIcon">{{$link->icon}}</a>
                                <a class="{{ $slug->layout->linkText }}" id="linkText" href="{{$link->link}}" target="_blank">{{$link->link}}</a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Bybu watermark -->
                    <div class="bybu-watermark absolute bottom-5 left-0 right-0 flex justify-center font-bold uppercase py-10">
                        <img src="images/logo.png" class="h-6">
                        <span class="ml-2">Bybu</span>
                    </div>
                </div> 
            </div> 

        </div>
    </div>

</x-app-layout> 