<x-layouts.app title="Blog" metaDescription="Blog meta description">


    <header >
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Blog</h1>
    <a href="{{ route('posts.create')  }}">Create a new post</a>
    </header>

    @foreach($posts as $post)
    <div style="display: flex; align-items: baseline;">
     <h2>
        <a href="{{  route('posts.show', $post)  }}">
            {{  $post->title  }}
        </a>
     </h2>&nbsp;
     <a href="{{  route('posts.edit', $post)  }}">Edit</a>
     </div>
    @endforeach

</x-layouts.app>