<x-layouts.app :title="$post->title" :metaDescription="$post->body">

<x-layouts.navigation/>

<h1>{{  $post->title  }}</h1>
<h2>{{  $post->body}}</h2>

<a href="{{  route('posts.index')  }}">Regresar</a>

</x-layouts.app>