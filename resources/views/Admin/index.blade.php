<x-app-layout>

    <div class="text-white h-screen">

        <div class="flex">
            <div class="w-3/5 p-4 h-screen">
                <div class="grid grid-cols-2 gap-6 h-auto">   
                    @foreach($layouts as $layout)
                        <div class="p-12 relative h-3/4 rounded-md overflow-y-auto" style="background: url('{{ $layout->bgImage }}');background-size: cover;" >
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
                                <div class="{{ $layout->linksDiv }}" id="linksDiv">
                                    <a href="#" target="_blank" class="{{ $layout->linkIcon }}" id="linkIcon">FB</a>
                                    <div class="{{ $layout->linkText }}" id="linkText">www.fb.com</div>
                                </div>
                                <div class="{{ $layout->linksDiv }}" id="linksDiv">
                                    <a href="#" target="_blank" class="{{ $layout->linkIcon }}" id="linkIcon">FB</a>
                                    <div class="{{ $layout->linkText }}" id="linkText">www.fb.com</div>
                                </div>
                                <div class="{{ $layout->linksDiv }}" id="linksDiv">
                                    <a href="#" target="_blank" class="{{ $layout->linkIcon }}" id="linkIcon">FB</a>
                                    <div class="{{ $layout->linkText }}" id="linkText">www.fb.com</div>
                                </div>
                                <div class="{{ $layout->linksDiv }}" id="linksDiv">
                                    <a href="#" target="_blank" class="{{ $layout->linkIcon }}" id="linkIcon">FB</a>
                                    <div class="{{ $layout->linkText }}" id="linkText">www.fb.com</div>
                                </div>
                            </div>

                            <!-- Bybu watermark -->
                            <div class="bybu-watermark absolute bottom-5 left-0 right-0 flex justify-center font-bold uppercase">
                                <img src="/images/logo.png" class="h-6">
                                <span class="ml-2">Bybu</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>    

            <div class="bg-gray-200 h-screen overflow-y-auto w-2/5">
                <form action="" class="p-8">
                    <input type="text" placeholder="profileImageDiv">
                </form>
            </div>
        </div>


    </div>

</x-app-layout>