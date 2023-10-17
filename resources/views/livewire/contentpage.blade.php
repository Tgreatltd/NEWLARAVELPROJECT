<div>
    <div class="container mx-auto max-w-screen-lg mt-8">
        <div class="flex ">
            @foreach ($users as $user)
            <div class="w-1/2 h-40">
                <!-- Left Column -->
            <div><img style="height: 100px; width:100px" src="{{ asset('storage/'. $user->image) }}" alt=""></div>
             <div>{{$user->title}}</div>
             <div>{{$user->description}}</div>
            
            </div>
            {{-- <div class="w-1/2 h-40 bg-green-500">
                <!-- Right Column -->
            </div> --}}
             @endforeach
        </div>
    </div>
</div>
