<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Mostra a index do site
     * @return view
     */
 	public function index ()
    	{
    		return view('welcome');
    	}


	public function novopost ()
	{
		return view('post.novopost');
	}


	public function inserepost (Request $request)
	{
		
		$dados = [
		'titulo' => $request->input('titulo'),
		'texto' => $request->input('texto'),
		'publicado' => 1
		];

		$post = \App\Post::create($dados);
		return redirect('/post/index');
	}


		public function listaposts ()
		{
			$posts  = \App\Post::all();
			return view('post.index', compact('posts'));
		}


			public function show ($id)
			{
				$post = \App\Post::find($id);
				return view('post.post', compact('post'));

			}


				public function atualizapost ($id)	
				{
						$post = \App\Post::find($id);
						return view('post.atualizar', compact('post'));
					
				}

					public function gravaatualizacao (Request $request, $id)
					{

						$post = \App\Post::find($id);
						$post->titulo = $request->input('titulo');
						$post->texto = $request->input('texto');
						$post->save();
						redirect('post/index');
					}


}
