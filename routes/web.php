<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\RegisterController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])
    ->middleware('guest');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Route::get('/home/{name}', function ($name) { // 클로저 Closure
//     return '안녕하세요. 저는 겁없는 MC '. $name . ' 입니다';
// });

// Route::get('/home/{name?}', function ($name='test') { // 클로저 Closure
//     return '안녕하세요. 저는 겁없는 MC '. $name . ' 입니다';
// });

// Route::get('/home/{name?}',
//     ['as' => 'testhome',
//         function($name='testhome') {
//             return '안녕하세요 . 저는 겁없는 MC '. $name . ' 입니다';
//         }
//     ]
// );

// Route::get('mytesthoem/{param}',

// );

// Route::get('home1/html',
//     ['as' => 'homehtml',
//         function(){
//             $html = <<<HTML
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>라라벨 Heredoc 테스트</h1>
//     <h2>화이팅</h2>
// </body>
// </html>

// HTML;
//             return $html;
//         }
//     ]
// );

// Route::get('task/view/{param}',
//     function($param='default'){
//         $task = [
//             'task_name' => 'asd',
//             'due_date' => '2009-05-23 06:40:00',
//             'trans_data' => $param,
//         ];
//         return view('task.view',compact('task'));
//     }
// );

// Route::get('task/view/{param}',
//     function($param='default'){
//         $task_new = [
//             'task_name' => '고아원 단체 자살',
//             'due_date' => '무현이 바위 운지',
//         ];
//         return view('task.view')->with('task',$task_new)->with('trans_data',$param);
//     }
// );

// Route::get('task/alert/{param}',
//     function(){
//         $task = [
//             'task_name' => '다우니 생일',
//             'due_date' => '2000-05-23 05:23:00',
//             'comment' => '<script>window.alert("안녕하세요")</script>',
//         ];
//         return view('task.alert')->with('task',$task);
//     }
// );

// Route::get('testif/{param}',
//     function($param=0) {
//         return view('task.testif')->with('num',$param);
//     }
// );

// Route::get('testfor/{param}', 
//     function($param){
//         return view('task.testfor')->with('',$param);
//     }
// );