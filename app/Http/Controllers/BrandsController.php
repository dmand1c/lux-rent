<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BrandRepositoryInterface;
use App\Brand;

class BrandsController extends Controller
{
    private $brandRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;

        $this->middleware('auth');
    }

    /**
     * Display brands index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $brands = $this->brandRepository->getAllBrands();

        return view('brands.index')->with('brands', $brands);
    }
}
