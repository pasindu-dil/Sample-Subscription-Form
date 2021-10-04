<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function index($name, $price)
    {
        $data = ['name' => $name, 'price' => $price];
        return \View::make('upgrade', $data);
    }

    
}
