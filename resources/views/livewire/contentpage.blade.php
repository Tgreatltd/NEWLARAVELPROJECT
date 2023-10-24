<div>
    <div class="container mx-auto max-w-screen-lg mt-8">
        <div class="flex flex-wrap space-x-4">
            @foreach ($users as $user)
    
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/4 h-[50vh] bg-black-500 mb-4 p-4">
                <a href="{{url('storyline/'.$user->id)}}" wire:navigate>
                    <div style="height: 200px; width:200px; margin-bottom:50px"><img style="height:200px; width:300px"   src="{{ asset('storage/'. $user->image) }}" alt=""></div>
                    <div><h1 class="text-lg">{{$user->title}}</h1></div>
                  <div>   <h1 style="color: rgb(0, 253, 63)" class="text-lg">{{$user->description}}</h1></div>
                </a>
            </div>

            @endforeach
        </div> 

        {{-- uploading images manually
        <div>
            <img   src="{{ asset('storage/images/5TUsBVOreQAYAzOGJY3g3Ky3DNqhhPBbSdHZt9D9.jpg') }}" alt="">
        </div> --}}
    
    </div>
</div>
