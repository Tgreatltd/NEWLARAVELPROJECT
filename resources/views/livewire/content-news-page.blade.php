<div class="container mx-auto p-5">
    {{-- <div>{{$storyId}}</div> --}}
    @if ($newsId)
    <div><img id="image" class="h-[20vh]" src="{{ asset('storage/'. $newsId->image) }}" alt=""></div>
    <h2>{{ $newsId->title }}</h2>
    {{-- <p>{{ $storyId->storyline }}</p> --}}
    <div class="container mx-auto p-5 bg-green-100">
        {{$newsId->storyline}}
    </div>
@else
    <p>Story not found.</p>
@endif
</div>
