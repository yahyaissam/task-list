<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/about', function () {
    $name = 'Yahya';
    $name = request('name');

    return view('about', compact('name'));
});

Route::post('/store', function () {

    $name = request('name');
    return view('about', compact('name'));
});
// array
Route::get('tasks', function () {
    // $tasks = [
    //     'first-task' => 'Task 1',
    //     'second-task' => 'Task 2',
    //     'third-task' =>  'Task 3'
    // ];
    return view('tasks');
    // , compact('tasks'));
});

Route::get('show/{id}', function ($id) {
    $tasks = [
        'first-task' => 'Task 1',
        'second-task' => 'Task 2',
        'third-task' =>  'Task 3'
    ];

    $task = $tasks[$id];
    return view('show', compact('task'));
});
Route::get('/', [TaskController::class, 'index'])->name('tasks');
Route::post('create', [TaskController::class, 'create'])->name('task.create');
Route::delete('delete/{id}', [TaskController::class, 'destroy'])->name('task.delete');
Route::put('edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::patch('update/{id}', [TaskController::class, 'update'])->name('task.update');

// Route::get('update_task/{id}', [TaskController::class, 'update'])->name('task.update');

Route::get('update_task/{id}', function ($id) {

    $tasks = DB::table('tasks')->where('id', $id)->get();
    return view('front.update_task', compact('tasks'));
});
