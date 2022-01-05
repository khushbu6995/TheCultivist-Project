<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class HomeController extends Controller
{
    public function index()
    {
        $countries=Country::all();
        // return $countries;
        return view('home',compact('countries'));
    }
    public function success()
    {
        return view('success');
    }
}
