<div class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="w-full py-2 px-3 border rounded" placeholder="Enter a title" required>
            </div>
    
            <div class="mb-4">
                <label for="storyline" class="block text-gray-700 text-sm font-bold mb-2">Storyline</label>
                <input type="text" name="storyline" id="storyline" class="w-full py-2 px-3 border rounded" placeholder="Enter a storyline" required>
            </div>
    
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" class="w-full py-2 px-3 border rounded" rows="4" placeholder="Enter a description" required></textarea>
            </div>
    
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Image</label>
                <input type="file" name="image" id="image" class="w-full py-2 px-3 border rounded" accept="image/*" required>
            </div>           
        </form>
    </div>
</div>
