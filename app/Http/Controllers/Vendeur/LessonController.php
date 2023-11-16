<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendeur.courses.chapters.lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Lesson $lesson)
    {
        $lesson->title = $request->title;
        $lesson->video = $request->video;
        $lesson->chapter_id = $request->chapter_id;
      
        $lesson->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function lesson_images(String $id)
    {
        $lesson = Lesson::where('id', $id)->first();
        return view('vendeur.courses.chapters.lessons.images.lesson_images', compact('lesson'));
    }

    public function lesson_contenu(String $id)
    {
        $lesson = Lesson::where('id', $id)->first();
        return view('vendeur.courses.chapters.lessons.images.lesson_contenus', compact('lesson'));
    }
}
