<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::all();
        $number_buys = Course::orderBy('number_buy', 'desc')->limit(4)->get();
        return view('home.index', compact('courses', 'number_buys'));
    }
}
