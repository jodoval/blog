<?php

//Rutas get
Route::get('/','PostController@index');
Route::get('post/{id?}','PostController@verPost');
route::get ('editar/{id?}','PostController@getEditar');
route::get ('borrar/{id?}','PostController@getBorrar');


//Rutas post
Route::post('crear','PostController@crearPost');
Route::post('editar','PostController@postEditar');



