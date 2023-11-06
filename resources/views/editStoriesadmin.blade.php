<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color:black">
    <div class="container mx-auto p-5">
    <div class="mt-3">
        @livewire('navbaradmin')
    </div>
     <div class="mt-3">
        @livewire('edit-story-admin', ['id'=>$id]);
     </div>
</div>
</body>
</html>