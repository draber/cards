<?php

use App\Modules\Cards\Controllers\CardController;
use Illuminate\Support\Facades\Route;


try{
    Route::get(
        '/',
        function (){
            return redirect('cards');
        }
    );

    Route::get('/cards', '\\' . CardController::class . '@index');
    Route::get('/cards/{card}', '\\' . CardController::class . '@card');
} catch(Exception $e){
    abort('404');
}
