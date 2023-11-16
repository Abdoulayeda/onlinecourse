<?php

namespace App\Http\Controllers\Vendeur;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image as ImageInvention;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('vendeur.courses.chapters.lessons.images.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // $files = $request->file('images');
        foreach ( $request->file('images') as $file) {
            $imagename = 'images_lesson'.uniqid().'.'.$file->extension();
            $destinationPath = public_path('/images_lesson');
            $img = ImageInvention::make($file->path());
            $img->resize(350, 250, function ($constraint) {
                 $constraint->aspectRatio();
             })->save($destinationPath.'/'.$imagename);

             $image = new Image;
             $image->name = $imagename;
             $image->url_image = asset('images_lesson/'.$imagename);
             $image->lesson_id = $request->lesson_id;
             $image->save();
           
        }

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
}
