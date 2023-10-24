<div class="container mx-auto p-5">
    {{-- <div>{{$storyId}}</div> --}}
    @if ($storyId)
    <div><img id="image" class="h-[20vh]" src="{{ asset('storage/'. $storyId->image) }}" alt=""></div>
    <h2>{{ $storyId->title }}</h2>
    {{-- <p>{{ $storyId->storyline }}</p> --}}
    <div class="container mx-auto p-5 bg-green-100">
        {{$storyId->storyline}}
    </div>
@else
    <p>Story not found.</p>
@endif
</div>


<div class="container max-w-screen-lg mx-auto mt-8 ">
        <div class="flex flex-wrap space-x-4">
            @foreach ($users as $user)
    
            <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/4 h-[55vh] bg-green-100 mb-4 p-4">
                <a href="{{url('storyline/'.$user->id)}}" wire:navigate>
                    <div style=" margin-bottom:60px; height:200px; width:100%"><img style="height:200px; width:100%"   src="{{ asset('storage/'. $user->image) }}" alt=""></div>
                    <div style="margin-bottom:10px;height:50px;width: 100%;"><h1 class="text-lg">{{$user->title}}</h1></div>
                  <div style="width: 100%; height:130px;"> <h1 class="text-lg">{{$user->description}}</h1></div>
                </a>
            </div>

            @endforeach
        </div> 