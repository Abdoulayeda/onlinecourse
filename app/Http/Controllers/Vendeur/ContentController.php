<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Lesson;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
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
        //
    }

    public function preview(string $slug)
    {
       $lesson = Lesson::where('slug', $slug)->first();
       // $content = Content::where('slug',  $slug)->first();

     //   return $lesson->content->content;
  //  return $lesson;
        return view('vendeur.courses.chapters.lessons.contents.preview', compact('lesson'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Content $content)
    {
        $content->content = $request->content;
        $content->lesson_id = $request->lesson_id;
        $content->slug = 'text'.time().''.uniqid();
        $content->save();

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
        
    }
}
