<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class SnsController extends Controller
{
    public function add()
  {
      return view('sns');
  }

    //投稿を作成する
    public function create(Request $request)
  {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);

        $post->fill($form);
        $post->save();
        
        //snsにリダイレクトする
        return redirect('sns');
  }  

  public function index(Request $request)
  {
      $cond_body = $request->cond_body;
      $user = User::all();
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('sns', ['posts' => $posts, 'users' => $user]);
  }
  
  public function delete(Request $request){
    $post = Post::find($request->id);
    $post->delete();

    return redirect('sns');
  }




}




