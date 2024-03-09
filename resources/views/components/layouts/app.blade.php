<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  $title  }}</title>
    <meta name="description" content="{{  $metaDescription ?? 'Default meta description'  }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="antialiased bg-slate-300">

    <x-layouts.navigation />

    @if(session('status'))
     <div class="max-screen-xl px-3 py-2 mx-auto font-bold text-center
     text-white sm:px-6 lg:px-8 bg-emerald-500">{{  session('status')  }}</div>
     @endif
    
  {{  $slot  }}

</body>
</html>