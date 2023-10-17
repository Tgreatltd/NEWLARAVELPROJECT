<div>
    <div class="container mx-auto max-w-screen-lg mt-8">
        <div class="flex flex-wrap space-x-4">
            @foreach ($users as $user)
    
            <div class="w-full sm:w-1/4 md:w-1/6 lg:w-1/4 h-40 bg-blue-500 mb-4 p-4">
                <div><img style="height: 100px; width:100px" src="{{ asset('storage/'. $user->image) }}" alt=""></div>
                <div>{{$user->title}}</div>
                <div>{{$user->storyline}}</div>
                <div>{{$user->description}}</div>
            </div>

            @endforeach
        </div>
    </div>
</div>
