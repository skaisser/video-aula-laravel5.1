<h1>Vamos criar um novo post!</h1>

<form method="post" action="/post/novo" >
	<label for="titulo">Titulo</label>
	<input type="text"	name="titulo" id="titulo">
	<label for="texto">Texto</label>
	<textarea name="texto" id="texto" cols="30" rows="10">
		
	</textarea>
	<input type="hidden" name="publiccado" id="publicado" value="1">
	{!! csrf_field() !!}
	<input type="submit" name="submit" value="Adicionar Post">
</form>