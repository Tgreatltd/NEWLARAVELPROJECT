<div>
    <div class="container mx-auto  mt-8 p-4">
        <div class="flex flex-wrap space-x-4">
            @foreach ($users as $user)
    
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/4 h-[54vh] bg-blue-100 mb-4 p-4">
                <a href="{{url('storyline/'.$user->id)}}" wire:navigate>
                    <div><img style="height: 300px; width:500px"   src="{{ asset('storage/'. $user->image) }}" alt=""></div>
                    <h1 style="height: 100px; width:100px" class="text-lg">{{$user->title}}</h1>
                     <h1 style="color: rgb(0, 253, 63); height:100px;width:100px" class="text-lg">{{$user->description}}</h1>
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
