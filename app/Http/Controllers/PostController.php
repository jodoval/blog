<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;  //usaremos el modelo post

class PostController extends Controller
{
  public function index(){
    $posts= Post::orderBy ('created_at','desc')->get();
    return view ('index',['posts'=>$posts]);

  }

  public function crearPost(Request $request){
    $post=new Post;
    $post->titulo=$request->titulo;
    $post->contenido=$request->contenido;
    $post->save();
    return redirect ('/');
  }  //fin function crearPost

public function verPost ($id=null){
    if (!isset($id)) {
      return redirect ('/');
    }

    $post=Post::find($id);
    return view('post',['post'=>$post]);

} //fin function verPost

  public function getBorrar ($id=null){
    if (!isset($id)) {
      return redirect ('/');
    }
    $post=Post::find($id);
    $post->delete();
    return redirect ('/');

  }  //fin getBorrar

  public function getEditar ($id=null){
    if (!isset($id)) {
      return redirect ('/');
    }
    $post=Post::find($id);
    return view ('editar',['post'=>$post]);
  }

  public function postEditar (Request $request){
    $post=Post::find ($request->id);
    $post->titulo=$request->titulo;
    $post->contenido=$request->contenido;
    $post->save();
    return redirect ('/');
  }


} //fin clase PostController
