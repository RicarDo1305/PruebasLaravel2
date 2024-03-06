<x-layouts.app title="Blog" metaDescription="Blog meta description">

<x-layouts.navigation/>

    <h1>Blog</h1>
    @foreach($posts as $post)
     <h2>{{  $post['title']  }}</h2>
    @endforeach
  
</x-layouts.app>