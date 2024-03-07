<x-layouts.app title="Crear un nuevo post" metaDescription="Formulario para crear un nuevo post">

<x-layouts.navigation/>

<h1>Create a new post</h1>

@foreach($errors->all() as $error)
<p>{{  $error  }}</p>
@endforeach
<form action="{{  route('posts.store')  }}" method="POST">

   @csrf
   <label>
       Title<br>
      <input name="title" type="text" value="{{  old('title')  }}">
      <br>
       @error('title') 
       <br>
       <small style="color: red">{{  $message  }}</small>
       @enderror
   </label><br>
   <label>
       Body<br>
      <textarea name="body">{{  old('body')  }}</textarea>
      @error('body') 
       <br>
       <small style="color: red">{{  $message  }}</small>
       @enderror
   </label><br>
   <button type="submit">Enviar</button>
   <br>
</form>

<a href="{{  route('posts.index')  }}">Regresar</a>

</x-layouts.app>