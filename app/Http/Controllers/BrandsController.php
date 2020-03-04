<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display brands index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $brands = Brand::getAllBrands();

        return view('brands.index')->with('brands', $brands);
    }
}
