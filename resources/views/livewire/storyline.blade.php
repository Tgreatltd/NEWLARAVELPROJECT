<div>
    {{-- <div>{{$storyId}}</div> --}}
    @if ($storyId)
    <h2>{{ $storyId->title }}</h2>
    <p>{{ $storyId->storyline }}</p>
@else
    <p>Story not found.</p>
@endif
</div>
