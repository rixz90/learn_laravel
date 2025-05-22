<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use \Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

# Route::resource('posts', PostsController::class);
# Route::get('/contact', PostsController::class.'@contact');
# Route::get('/posts/{id}/{name}', PostsController::class.'@show_posts');

//
Route::get('/insert', function () {
    DB::insert('insert into posts(title, body) values(?,?)',['PHP ass','Laravel2']);
});

//Route::get('/update', function () {
//    return DB::update('update posts set title = "Dumber php set" where id = ?', [1]);
//});

//Route::get('/delete', function () {
//    return DB::delete('delete from posts where id=?', [1]);
//});

Route::get('/posts', function () {
    return Post::all();
});

Route::get('/posts/{id}', function ($id) {
    return Post::query()->find($id);
});

//Route::get('/posts/where/{id}', function ($id) {
//    return Post::query()->where('id',$id)->orderBy('id','desc')->take('1')->get();
//});

//Route::get('/posts/where/{id}', function (Request $req) {
//    if($req->in)
//    return Post::findOrFail($id);
//});

Route::get('/create', function () {
    $user = User::create(['name'=> 'adam', 'email'=>'abc@g.com', 'password'=>bcrypt('password')]);
    Post::create(['user_id'=> $user->id,'title'=>'asd', 'body'=>'failed']);
});

Route::get('/update', function () {
    Post::where('id',2)->where('is_admin','0')->update(['title'=>'Dicker']);
});

Route::get('/delete', function () {
    Post::destroy([3,4]);
});

//One-to-One Relationship
Route::get('/user/{id}/post', function ($id) {
    return User::find($id)->post->body;
});
//One-to-One Relationship inverse
Route::get('/post/{id}/user', function ($id) {
    return Post::find($id)->user;
});

Route::get('/posts', function () {

});
