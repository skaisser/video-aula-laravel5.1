<?php
Route::get('/','SiteController@index');
Route::get('post/novo', 'SiteController@novopost');
Route::get('post/index', 'SiteController@listaposts');
Route::post('post/novo', 'SiteController@inserepost');
Route::get('post/{id}', 'SiteController@show');
Route::get('post/{id}/atualizar', 'SiteController@atualizapost');
Route::post('post/{id}/atualizar', 'SiteController@gravaatualizacao');

