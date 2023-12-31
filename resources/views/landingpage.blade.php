<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      @livewire('navbar')

      <div>
        @livewire('contentpage')
      </div> 

      {{-- <div>
        @livewire('custom-event-component')
      </div> --}}

      {{-- @livewire('custom-event-listener-component') --}}
</div> 
</body>
</html>