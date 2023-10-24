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

