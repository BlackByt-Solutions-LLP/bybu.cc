<a href="{{ route('welcome') }}"></a>

<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 


<div class="bg-gray-900 text-white ">
    <div class="flex justify-between items-center ">
        <div class="w-20  h-screen space-y-4 p-3 bg-gray-800 ">
            <img src="{{asset('images/logo.png')}}" alt="">
            <img src="{{asset('images/faq.png')}}" alt="">
            <img src="{{asset('images/user.png')}}" alt="">
        </div>
        <div class="w-4/6  h-screen space-x-8">
            <div class=" p-5 space-x-8  border-b-2 border-gray-500">
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
        <div class="w-2/6  h-screen">
            <div class="flex items-center  border-b-2 border-gray-500  p-5 space-x-8">
                <a href="">My link:http://linkr.ee/diah122</a>
                <button type="submit" class="p-1 rounded-md border-2 bg-white text-black w-20 ml-40 ">Share</button>
            </div>
            <div class="py-20 px-28 bg-gray-800">
                <div class="h-4/6 w-64   border-4 border-gray-200 rounded-3xl py-5 ">
                    <img src="{{asset('images/user.png')}}" alt="" class="px-24"> 
                    <h3 class="text-white text-center">@Diah122</h3>
                    <img src="{{asset('images/logo.png')}}" alt="" class="px-24 py-60"> 
                </div>
            </div>
        </div>
    
          
       </div>
    </div>

