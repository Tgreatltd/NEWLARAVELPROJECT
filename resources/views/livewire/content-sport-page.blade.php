<div class="container mx-auto p-5">
    {{-- <div>{{$storyId}}</div> --}}
    @if ($sportId)
    <div><img id="image" class="h-[20vh]" src="{{ asset('storage/'. $sportId->image) }}" alt=""></div>
    <h2>{{ $sportId->title }}</h2>
    {{-- <p>{{ $storyId->storyline }}</p> --}}
    <div class="container mx-auto p-5 bg-green-100">
        {{$sportId->storyline}}
    </div>
@else
    <p>Story not found.</p>
@endif
</div>

