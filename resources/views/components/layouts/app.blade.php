<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  $title  }}</title>
    <meta name="description" content="{{  $metaDescription ?? 'Default meta description'  }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>

    <x-layouts.navigation />

    @if(session('status'))
     <div class="status">{{  session('status')  }}</div>
     @endif
    
  {{  $slot  }}

</body>
</html>