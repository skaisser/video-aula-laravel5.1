@if($posts)
@foreach($posts as $post)
<h1><a href="{{$post->id}}">{{$post->titulo}}</a></h1>
<p>{{$post->texto}}</p>
@endforeach
@endif