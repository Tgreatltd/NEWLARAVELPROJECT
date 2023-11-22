<div class="container mx-auto p-5">
    {{-- <div>{{$storyId}}</div> --}}
    @if ($musicId)
    <div><img id="image" class="h-[20vh]" src="{{ asset('storage/'. $musicId->image) }}" alt=""></div>
    <h2>{{ $musicId->title }}</h2>
    {{-- <p>{{ $storyId->storyline }}</p> --}}
    <div class="container mx-auto p-5 bg-green-100">
        {{$musicId->storyline}}
    </div>
@else
    <p>Story not found.</p>
@endif
</div>

