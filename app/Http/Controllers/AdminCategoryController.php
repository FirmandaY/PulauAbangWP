<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Category;
use App\Article;
use File;
use Image;

class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_category = Category::all();

        return view('AdminCategory.indexCategory', compact('data_category'));
    }

    public function indexArticles($title){
        $line = 5;
        $data_category = Category::all();
        $article = Article::all();

        $category = Category::where('title', $title)->first();
        $articles = $category->articles()->orderBy('id', 'desc')->paginate($line);
        $num = $line * ($articles->currentPage()-1);

        return view('AdminCategory.indexArticleCategory', compact(
            'data_category', 'category', 'articles', 'article', 'num'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_category = Category::all();

        return view('AdminCategory.create', compact(
            'data_category'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string|max:1250',
        ]);

        $category = new Category;
        $category->title = $request->title;
        $category->description = $request->description;

        $image = $request->image_url;
        $filename = time().'.'.$image->getClientOriginalExtension();

        Image::make($image)->save('thumb/'.$filename);
        $image->move('public/images/', $filename);

        $category->image_url = $filename;
        $category->save();

        return redirect('/adminCategory')->with('message', 'Data Kategori berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $data_category = Category::all();
        return view('AdminCategory.edit', compact(
            'category', 'data_category'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required|string|max:1250',
        ]);

        $category = Category::find($id);
        $category->title = $request->title;
        $category->description = $request->description;

        $image = $request->image_url;
        if($image) {
            File::delete('thumb/'.$category->image);
            $filename = $image->getClientOriginalName();
            $data['image_url'] = $filename;

            Image::make($image)->save('thumb/'.$filename);
            $image->move('public/images/', $filename);

            $category->image_url = $filename;

            $category->update();
            return redirect('/adminCategory')->with('message', 'Perubahan data berhasil disimpan!');

        }else{
            $category->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return redirect('/adminCategory')->with('message', 'Perubahan data berhasil disimpan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        File::delete('thumb/'.$category->image_url);
        File::delete('public/images/'.$category->image_url);
        return redirect('/adminCategory')->with('message_delete', 'Data Kategori Berhasil di Hapus');
    }
}
