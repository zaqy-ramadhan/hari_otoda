<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Causes;
use App\Models\Galleries;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('wPage.explore.index');
    }

    public function aboutus(){
        return view('wPage.about.about');
    }
}
