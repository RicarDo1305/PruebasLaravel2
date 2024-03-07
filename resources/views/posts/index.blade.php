<x-layouts.app title="Blog" metaDescription="Blog meta description">

<x-layouts.navigation/>
 
    <h1>Blog</h1>
    <a href="{{ route('posts.create')  }}">Create a new post</a>
    @foreach($posts as $post)
     <h2>
        <a href="{{  route('posts.show', $post)  }}">
            {{  $post->title  }}
        </a>
     </h2>
    @endforeach
  
</x-layouts.app>