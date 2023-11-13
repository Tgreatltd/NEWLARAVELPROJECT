<div class="">
    {{-- <div class="container mx-auto max-w-screen-lg mt-8"></div> --}}
    <div class="container max-w-screen mx-auto ">
        <div class="flex flex-wrap justify-between">
            @foreach ($users as $user)
    
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/4 h-[55vh]  mb-4 p-4 bg-gray-900">
                <a href="{{url('storyline/'.$user->id)}}" wire:navigate>
                    <div class="container bg-gray-700"><img style="height:200px; width:100%" class="mb-4"   src="{{ asset('storage/'. $user->image) }}" alt="">
                        <div class=" flex items-center justify-center bg-gray-500 mb-4" style="margin-bottom:10px;height:50px;width: 100%;"><h1 class="text-white">{{$user->title}}</h1></div>
                        <div style="width: 100%; height:130px;"> <h1 class="text-white">{{$user->description}}</h1></div>
                    </div>
                </a>
            </div>  

            @endforeach
        </div> 

        {{-- style=" margin-bottom:60px; height:200px; width:100%" --}}

        {{-- uploading images manually
        <div>
            <img   src="{{ asset('storage/images/5TUsBVOreQAYAzOGJY3g3Ky3DNqhhPBbSdHZt9D9.jpg') }}" alt="">
        </div> --}}
    
    </div>
</div>
