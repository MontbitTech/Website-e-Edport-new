<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;


class ParentalControlController extends Controller
{
    public function index()
    {
        $states = State::where('country_id', 101)->get();
        return view('website.products.parental-control-form', compact('states'));
    }
}
