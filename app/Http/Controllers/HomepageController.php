<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomepageController extends Controller
{
    public function index() {

        $movieList = Movie::all();

        return view('homepage', compact('movieList'));
    }
}
