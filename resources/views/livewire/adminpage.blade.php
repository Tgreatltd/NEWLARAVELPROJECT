<div class="container mx-auto mt-8">
    <h1 class="text-blue-700">STORIES ADMIN PAGE</h1>
    <div>
        @if (session()->has('success'))
        <h1 class="text-blue-700">{{session()->get('success')}}</h1>
    @endif

    @if (session()->has('error'))
    <h1 class="text-blue-700">{{session()->get('error')}}</h1>
@endif
        <form wire:submit.prevent="saveImage"  enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2 w-full">Title</label>
                <input wire:model="title" type="text" name="title" id="title" class="w-full py-2 px-3 border rounded" placeholder="Enter a title">
                @error('title')
                    <small>{{$message}}</small>
                @enderror
            </div>
    
            <div class="mb-4">
                <label for="storyline" class="block text-gray-700 text-sm font-bold mb-2 w-full">Description</label>
                <input wire:model="description" name="description" id="description"  class="w-full py-2 px-3 border rounded" placeholder="Enter description">
                @error('description')
                <small>{{$message}}</small>
            @enderror
            </div>
           
    
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2 w-full">Storyline</label>
                <textarea wire:model="storyline" name="storyline" id="storyline" class="w-full py-2 px-3 border rounded" rows="8" placeholder="Enter storyline"></textarea>
                @error('storyline')
                <small>{{$message}}</small> 
             @enderror
            </div>
    
    
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2 w-full">Upload Image</label>
                <input wire:model="image" type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*">
            @error('image')
               <small class="text-red-600">{{$message}}</small> 
            @enderror
            </div>  
            
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Submit</button>
            </div>
        </form>
        
    </div>
    <br><br>

    <table class="min-w-full table">
        <thead class="bg-green-500">
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">ID</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">TITLE</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">DESCRIPTION</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">STORYLINE</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">IMAGE</th>
            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-xs leading-4 text-gray-800 uppercase tracking-wider">ACTION</th>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                    <td class="px-6 py-4 whitespace-no-wrap bg-red-300">{{$content->id}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-green-100 ">{{$content->title}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-green-200 ">{{$content->description}}</td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-red-100 ">{{$content->storyline}}</td>
                    {{-- <td class="px-4 py-2">{{$content->image}}</td> --}}
                    <td class="px-6 py-4 whitespace-no-wrap bg-green-300"><img style="height:50px; width:50px"src="{{ asset('storage/'. $content->image) }}" alt=""></td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-red-300">
                        <div class="flex space-x-2">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded"><a href="{{url('storyedit/'.$content->id)}}" wire:navigate>EDIT</a></button>
                        <button wire:click="delete" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">DELETE</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody> 
    </table>
    
</div>
