<?php

namespace Pallet\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

class PalletController extends Controller
{
    public function homepage() : View
    {
        return view('pallet.app', [
            'primary_component' => 'homepage',
            'input' => []
        ]);
    }
}
