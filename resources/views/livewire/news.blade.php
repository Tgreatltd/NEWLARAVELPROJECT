<div class="container mx-auto max-w-screen-lg mt-8">
    <div class="flex flex-wrap space-x-4">
        @foreach ($users as $user)

        <div class="w-full sm:w-1/3 md:w-1/4 lg:w-1/4 h-[46vh] bg-blue-100 mb-4 p-4">
            <a href="{{url('storyline/'.$user->id)}}" wire:navigate>
                <div><img   src="{{ asset('storage/'. $user->image) }}" alt=""></div>
                <h1 class="text-lg">{{$user->title}}</h1>
                 <h1 style="color: rgb(0, 253, 63)" class="text-lg">{{$user->description}}</h1>
            </a>
        </div>

        @endforeach
    </div> 

</div>