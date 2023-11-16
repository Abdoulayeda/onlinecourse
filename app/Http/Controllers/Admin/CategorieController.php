<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class CategorieController extends Controller
{
    public function index(){
        $categories = Categorie::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request, Categorie $categorie)
    {
        
        $request->validate([
            'title' => 'required|unique:categories',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]); 

       $file = $request->file('image');

       $imagename = 'categorie'.time().'.'.$file->extension();
       $destinationPath = public_path('/categories');
       $img = Image::make($file->path());
       $img->resize(350, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imagename);

        $categorie->title = $request->title;
        $categorie->image = $imagename;

        $categorie->save();

        return redirect()->back();
    }

    public function destroy(string $id){
        $categorie = Categorie::find($id);
        $categorie->delete();
       
        return redirect()->back();
    }
}
