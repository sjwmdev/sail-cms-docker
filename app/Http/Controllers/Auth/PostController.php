<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\posts\create;
use App\Models\category;
use App\Models\Gallery;
use App\Models\post;
use App\Models\Team;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::with(['gallery','category'])->get();
        // return $post;
      return view('auth.posts.index' , ['posts'=> $post]);
    // return view('auth.posts.index');
    }


    public function create()
    {   $categories = category::all();
    return view('auth.posts.create' , ['categories' => $categories]);
    }

    public function store(create $request)
    {

        try{
            DB::beginTransaction();

        if ($request->File('file')) {
            $file = $request->file;
            $filename = time() .'.'. $file->getClientOriginalName();
             $imagePath =('public/images/posts/');
             $file->store($imagePath);

            $gallery = Gallery::create([
                'image'=> $filename
            ]);
        }

        post::create([
            'category_id' => $request->category,
            'is_published' => $request->is_published,
            'title'=> $request->title,
            'description'=> $request->description,
            'gallery_id'=>$gallery->id

        ]);
        DB::commit();

    }
      catch(\Exception $ex){
        DB::rollback();
        dd($ex->getMessage());

    }
       $request ->session()->flash('alert success', 'post created successifuly');

        return to_route('posts.index ');
    }


    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {
        //
    }
}
