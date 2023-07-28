<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ViewController extends Controller
{
    /**
     * Define Main Page Of Products
     *
     * @return View
     */
    public function main()
    {
        return view("pages.products.index");
    }
}
