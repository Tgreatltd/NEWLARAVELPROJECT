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
                <textarea wire:model="storyline" name="storyline" id="storyline" class="w-full py-2 px-3 border rounded" rows="4" placeholder="Enter storyline"></textarea>
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
        <thead>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">TITLE</th>
            <th class="px-4 py-2">DESCRIPTION</th>
            <th class="px-4 py-2">STORYLINE</th>
            <th class="px-4 py-2">IMAGE</th>
            <th class="px-4 py-2">ACTION</th>
        </thead>
        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->title}}</td>
                    <td>{{$content->description}}</td>
                    <td >{{$content->storyline}}</td>
                    <td>{{$content->image}}</td>
                    <td class="flex space-x-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded"><a href="">EDIT</a></button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded"><a href="">DELETE</a></button>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
