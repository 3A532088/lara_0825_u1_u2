<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    /*\App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
    ]);*/

    /*$post=new \App\Post();
    $post->title='testtitle';
    $post->content='testcontent';
    $post->save();*/

    $post = \App\Post::find(8);
    foreach($post->comments as $comment) {
        echo $comment->content.'<br>';
    }
});

