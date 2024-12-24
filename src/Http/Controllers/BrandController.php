<?php

namespace Ossqo\Collector\Http\Controllers;

use Illuminate\Http\Request;
use Ossqo\Collector\Models\Brand;

class BrandController extends Controller
{
    public function index() 
    {
        //Brand::create(['title' => 'Mazda']);

        $brands = Brand::all();

        return view('collector::index', [
            'brands' => $brands
        ]);
    }
}
