<?php

use Pallet\Http\Controllers\PalletController;

Route::get('/', [PalletController::class, 'homepage'])->name('homepage');

?>
