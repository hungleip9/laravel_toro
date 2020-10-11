<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('hello1', function () {
    return view('hello1');
});
Route::get('hello2', function () {
    return view('hello2',[
        'name' => 'Le quang hung',
        'year' => '1998',
        'records' => [1,2,3],
        'i' => 1
    ]);
});
Route::prefix('task')->group(function (){
    Route::get('create', function () {
        return view('tasks.create',[
            'value' => 'Hoc lap trinh',

        ]);
    })->name('task.create');

    Route::get('edit', function () {
        $value = 'Hoc lap trinh';
        return view('tasks.edit')->with(['value'=>$value]);
    })->name('task.edit');

    Route::get('list', function () {
        return view('tasks.list',[
            'value' => 'Hoc lap trinh',

        ]);
    })->name('task.list');

});

Route::get('profile', function (){
   return view('BaiTap.profile',[
       'name' => 'Le Quang Hung',
       'old' => '1998',
       'TenTruong' => 'Uneti',
       'QueQuan' => 'Vinh Phuc'
   ]);
});
Route::get('list',function (){
   return view('BaiTap.list',[
       $list = [
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
        ]
    ]
   ])->with('list',$list);
});




////xoa
//Route::delete('/task/delete', function () {
//    dd('delete');
//});
//// xoa xong chuyen huong
//Route::delete('/task/delete', function () {
//    return redirect('/');
//});

// cach chuyen tham so id
Route::get('user/{id?}', function($id = null) {
    echo route('trump');
    return 'User ' . $id;
});
Route::get('u/{id?}', function($id = null) {
    echo route('trump');
    return ' User ' . $id;
});

Route::get('/user/{id}/post/{post}', function($id, $idPost) {
    return "This is post $idPost of user $id";
});


Route::view('/welcome', 'welcome');
Route::get('foo', function () {
    return 'hello world';
});
Route::get('task/list/hung/hung/hung/hung', function () {
    return 'hello world';
});
//class-room/LARAVEL2020004/units
Route::get('class-room/LARAVEL2020004/units', function () {
    return 'hello world';
});
//nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html
Route::get('2020-nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html', function () {
    return 'nobel-y-sinh-cho-ba-nha-khoa-hoc-phat-hien-virus-viem-gan-c-4171906.html';
})->name('trump');

Route::post('save',function (){
   echo 'post';
})->name('save');

//Route::get('save',function (){
//   echo 'post';
//});
//Route::match(['get','post'], 'save',function (){
//    echo route('trump');
//});
Route::prefix('admin')->group(function (){
    Route::prefix('user')->group(function (){
        Route::get('edit',function (){
            echo 'admin/user/edit';
        });
        Route::get('delete',function (){
            echo 'admin/user/delete';
        });
        Route::get('detail',function (){
            echo 'admin/user/detail';
        });
    });
    Route::get('edit',function (){
        echo 'admin/edit';
    });
    Route::get('post',function (){
        echo 'admin/post';
    });
    Route::get('delete',function (){
        echo 'admin/delete';
    });
});
// cach 2
//Route::group(
//    [
//        'prefix' => 'user'
//    ]
//    ,function (){
//    Route::get('edit',function (){
//        echo 'admin/user/edit';
//    });
//    Route::get('delete',function (){
//        echo 'admin/user/delete';
//    });
//    Route::get('detail',function (){
//        echo 'admin/user/detail';
//    });
//});

//tinh  nang hoan thanh
Route::prefix('task')->group(function (){
    Route::get('complete/3',function (){
        echo 'hoan thanh';
    })->name('todo.task.complete');
//tinh nang lam lai
    Route::get('reset/3',function (){
        echo 'Lam lai';
    })->name('todo.task.reset');
});

