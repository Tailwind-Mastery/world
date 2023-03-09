<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopController extends Controller
{
    public function index()
    {
        return Inertia::render('Shop', [
            'name' => 'Shop',
            'list' => [1,2,3,4,5,6,7,8,9]
        ]);
    }
}
