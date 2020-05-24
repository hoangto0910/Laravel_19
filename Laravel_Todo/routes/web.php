<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/link/welcome', function () {
//     return view('welcome2');
// })->name("view2");

// Route::get('/abc', function () {
//     return view('welcome');
// });

// Route::post('/update', function () {
//     dd("ok"); // dump die
// });

// // Route::get('/user/{id}', function ($id) {
// //     dd("Id la : " . $id);
// // });

// Route::get('/user/{id?}', function ($id = null) {
// 	if ($id == null) {
// 		return "List user";
// 	}
//     return ("Id la : " . $id);
// });

// // Route::get('/user/{id}/post/{post_id}/postname/{post_name}', function ($id, $postId, $postName) {
// //     return ("Id : " . $id . ", Post id : $postId, Postname : $postName");
// // });

// Route::get('/user/{id}/post/{post_id}/postname/{post_name?}', function ($id, $postId, $postName = null) {
// 	if ($postName == null) {
// 		return "Default";
// 	}
//     return ("Id : " . $id . ", Post id : $postId, Postname : $postName");
// });

// // router name (link khac doc)
// // Group
// Route::prefix("admin")->group(function(){
// 	Route::prefix("user")->group(function(){
// 		Route::get("/", function(){
// 			dd("user index");
// 		})->name("admin.user.inder");
// 		Route::get("create", function(){
// 			dd("user create");
// 		});
// 		Route::get("update", function(){
// 			dd("user update");
// 		});
// 	});
// });

// Route::prefix("admin")->group(function(){
// 	Route::prefix("post")->group(function(){
// 		Route::get("/", function(){
// 			dd("post index");
// 		});
// 		Route::get("create", function(){
// 			dd("post create");
// 		});
// 		Route::get("update", function(){
// 			dd("post update");
// 		});
// 	});
// });


// Homework
Route::get("homework", function(){
	return view("homework");
});
Route::prefix("task")->group(function(){
	Route::get("complete/3", function(){
		// setcookie("success", "Đã Hoàn thành", time()+5);
		// return redirect('homework');
		return ("Đã hoàn Thành công việc");
	})->name("todo.task.complete");
	Route::get("reset/3", function(){
		return ("Đã Lưu để làm lại công việc");
	})->name("todo.task.reset");
	Route::get("delete/3", function(){
		return ("Day la tinh nang Delete");
	})->name("todo.task.delete");
});
	