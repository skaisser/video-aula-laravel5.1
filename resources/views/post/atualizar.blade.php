<h1>Vamos criar um novo post!</h1>

<form method="post" action="/post/{{$post->id}}/atualizar" >
	<label for="titulo">Titulo</label>
	<input type="text"	name="titulo" id="titulo" value="{{$post->titulo}}">
	<label for="texto">Texto</label>
	<textarea name="texto" id="texto" cols="30" rows="10" >
		{{$post->texto}}
	</textarea>
	<input type="hidden" name="publicado" id="publicado" value="1">
	{!! csrf_field() !!}
	<input type="submit" name="submit" value="Atualizar Post">
</form>