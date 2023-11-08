<div class="container mx-auto mt-8">
    <h1 class="text-blue-700">STORIES ADMIN PAGE</h1>
    <div>
        @if (session()->has('success'))
        <h1 class="text-blue-700">{{session()->get('success')}}</h1>
    @endif

    @if (session()->has('error'))
    <h1 class="text-blue-700">{{session()->get('error')}}</h1>
@endif
        <form wire:submit.prevent="update"  enctype="multipart/form-data">
            @csrf
           @if ($storyId)
           <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2 w-full">Title</label>
            <input wire:model="title" type="text" name="title" id="title" class="w-full py-2 px-3 border rounded"
             placeholder="Enter a title" value="{{$storyId->title}}">
            @error('title')
                <small class="text-red-800">{{$message}}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2 w-full">Description</label>
            <input wire:model="description" name="description" id="description"  class="w-full py-2 px-3 border rounded" 
            placeholder="Enter description" value="{{$storyId->description}}">
            @error('description')
            <small class="text-red-800">{{$message}}</small>
        @enderror
        </div>
       

        <div class="mb-4">
            <label for="storyline" class="block text-gray-700 text-sm font-bold mb-2 w-full">Storyline</label>
            <textarea wire:model="storyline" name="storyline" id="storyline" class="w-full py-2 px-3 border rounded" rows="4"
             placeholder="Enter storyline" value="{{$storyId->storyline}}"></textarea>
            @error('storyline')
            <small>{{$message}}</small> 
         @enderror
        </div>


        {{-- <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2 w-full">Upload Image</label>
            <input wire:model="image" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded bg-red-800"
             accept="image/*" value="{{$storyId->image}}">
        @error('image')
           <small class="text-red-600">{{$message}}</small> 
        @enderror
        </div>  
         --}}
         
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Update</button>
        </div>  
           @endif
        </form>
        
    </div>
</div>
