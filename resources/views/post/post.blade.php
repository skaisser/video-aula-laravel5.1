@if($post)
<h1><a href="{{$post->id}}">{{$post->titulo}}</a></h1>
<p>{{$post->texto}}</p>
@endif