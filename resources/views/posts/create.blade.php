<x-layouts.app title="Crear un nuevo post" metaDescription="Formulario para crear un nuevo post">


<h1>Create a new post</h1>

<form action="{{  route('posts.store')  }}" method="POST">

   @csrf
   @include('posts.form-fields')
   <button type="submit">Enviar</button>
   <br>
</form>

<a href="{{  route('posts.index')  }}">Regresar</a>

</x-layouts.app>