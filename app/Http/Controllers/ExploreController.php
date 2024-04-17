<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        return view('wPage.explore.index'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function hotel()
    {
        return view('wPage.explore.hotel'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function culinary()
    {
        return view('wPage.explore.culinary'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function shopping()
    {
        return view('wPage.explore.shopping'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function heritage()
    {
        return view('wPage.explore.heritage'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function tourismspot()
    {
        return view('wPage.explore.tourismspot'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
    public function culture()
    {
        return view('wPage.explore.culture'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }

    public function things()
    {
        return view('wPage.explore.things-to-do'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }

    public function thingsdetail()
    {
        return view('wPage.explore.thingsdetail'); // Ganti 'hotel.index' dengan nama template blade yang sesuai
    }
}
