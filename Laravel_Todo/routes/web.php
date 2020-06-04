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

// Homework
Route::get("homework", function(){
	$listname = array(
		"cv1" => array(
			"id" => 1,
			"name" => "Làm Bài Tập Laravel",
			"deadline" => "31/5/2020"
		),
		"cv2" => array(
			"id" => 2,
			"name" => "Làm Bài Tập Php",
			"deadline" => "20/5/2020"
		),
		"cv3" => array(
			"id" => 3,
			"name" => "Làm Project Laravel",
			"deadline" => "30/5/2020"
		),
	);
	return view("homework", [
		"listname" => $listname
	]);
});
Route::group(["as" => "todo.task.", "prefix" => "tasks" , "namespace" => "frontend"], function(){
	Route::get("complete/{id?}", function($id = null){ //optional param de cuoi uri
		if ($id == null) {
			dd("Khong ton tai cong viec");
		}else{
			return ("Đã hoàn Thành công việc co id la : $id");			
		}
	})->name("complete");
	Route::get("reset/{id?}", function($id = null){
		if ($id == null) {
			dd("Khong ton tai cong viec");
		}else{
			return ("Đã Lưu để làm lại công việc co id la : $id");
		}
	})->name("reset");
	Route::get("delete/{id?}", function($id = null){
		if ($id == null) {
			dd("Khong ton tai cong viec");
		}else{
			return ("Day la tinh nang Delete co id la : $id");
		}
	})->name("delete");
	// Route::post("store", "TaskController@store")->name("store");
});
//namespace di tu Controller, chen yield mo section

// Homework Unit03
Route::get("profile", function(){
	return view("profile", [
		'name' => "Đặng Tô Hoàng",
		'year' => "1998",
		'school' => "KT - Kỹ Thuật Công Nghiệp",
		'country' => "Hải Dương",
		'introduce' => "<div style='color : red'><b><i>Hello, I'm Hoàng, I'm 22 years old...</i></b></div>",
		'muctieu' => "Become Lập trình viên php",
	]);
});
Route::get("listmanager", function(){
	$lists = [
        [
            'name' => 'Học View trong Laravel',
            'status' => 0
        ],
        [
            'name' => 'Học Route trong Laravel',
            'status' => 1
        ],
        [
            'name' => 'Làm bài tập View trong Laravel',
            'status' => -1
        ],
        [
            'name' => 'Làm bài tập Layouts trong Laravel',
            'status' => 0
        ],
        [
            'name' => 'Làm bài tập Route trong Laravel',
            'status' => 1
        ],
    ];
	return view("list", [
		"lists" => $lists,
	]);
});
Route::get('home', function() {
    return view("home");
});

// 4


Route::group(["prefix" => "task", "as" => "task.", "namespace" => "frontend"], function(){
	Route::get("/", "TaskController@index");
	Route::get("create", "TaskController@create");
	Route::get("destroy/{id?}", "TaskController@destroy");
	Route::get("edit/{id?}", "TaskController@edit");
	Route::get("show/{id?}", "TaskController@show");
	Route::get("store", "TaskController@store")->name("store");
	Route::get("update/{id?}", "TaskController@update");
});


Route::resource("tasks", "frontend\TaskController");
Route::get("taskcpl/{id?}", "frontend\TaskController@complete")->name("taskcpl");
Route::get("taskrpl/{id?}", "frontend\TaskController@reComplete")->name("taskrpl");

//5
