<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Course;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $courses = Course::where('user_id', Auth::user()->id)->get();

        return view('vendeur.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('vendeur.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|unique:courses',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]); 

        $file = $request->file('image');

        $imagename = 'produit'.time().'.'.$file->extension();
        $destinationPath = public_path('/courses');
        $img = Image::make($file->path());
        $img->resize(350, 250, function ($constraint) {
             $constraint->aspectRatio();
         })->save($destinationPath.'/'.$imagename);

        $course->name = $request->name;
        $course->price = $request->price;
        $course->image = $imagename;
        $course->categorie_id = $request->categorie_id;
        $course->user_id = Auth::user()->id;

        $course->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::where('id', $id)->first();
        return view('vendeur.courses.chapters.index', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
