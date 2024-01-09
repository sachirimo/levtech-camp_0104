<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
 class PostController extends Controller
 {
     public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
       return view('posts/index') -> with(['posts' => $post->getPaginateByLimit()]);
    }
    /**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
     public function show(Post $post)
   {
      return view('posts.show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
 }
?>