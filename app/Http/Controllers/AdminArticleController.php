<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Article;
use App\Category;
use App\Gallerie;
use File;
use Image;

class AdminArticleController extends Controller
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
        $line = 5;
        $data_article = Article::orderBy('id', 'desc')->paginate($line);
        $data_category = Category::all();
        $num = $line * ($data_article->currentPage()-1);


        return view('AdminArticle.indexArticle', compact(
            'data_article', 'data_category', 'num',
        ));
    }

    public function articleGalery($title){
        $line = 5;
        $data_category = Category::all();

        $article = Article::where('title', $title)->first();
        $galeries = $article->photos()->orderBy('id', 'desc')->paginate($line);
        $num = $line * ($galeries->currentPage()-1);

        return view('AdminArticle.indexArticleGallery', compact(
            'article', 'galeries', 'num',
        ));

    }

    public function search(Request $request){
        $data_category = Category::all();
        $line = 5;
        $look = $request->word;
        $data_article = Article::where('title','like',"%".$look."%")->orwhere('content', 'like', "%".$look."%")
        ->paginate($line);
        $num = $line * ($data_article->currentPage()-1);
        $article_category = Article::count();

        return view('AdminArticle.search', compact('data_category','data_article' ,'num','article_category','look'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_category = Category::all();
        return view('AdminArticle.create', compact('data_category'));
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
            'image_link' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|string|max:255|',
            'description' => 'required|string',
            'content' => 'required|string',
            'id_category' => 'required',
        ]);

        $article = new Article;

        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->id_category = $request->id_category;
        $article->article_seo = Str::slug($article->title);

        $image = $request->image_link;
        $filename = time().'.'.$image->getClientOriginalExtension();

        Image::make($image)->save('thumb/'.$filename);
        $image->move('public/images/', $filename);

        $article->image_link = $filename;
        $article->save();

        return redirect()->back()->with('message', 'Data produk berhasil ditambahkan!');
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
        $article = Article::find($id);
        $data_category = Category::all();
        return view('AdminArticle.edit', compact(
            'article', 'data_category',
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
        $this->validate($request,[
            'image_link' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|string|max:255|',
            'description' => 'required|string',
            'content' => 'required|string',
            'id_category' => 'required',
        ]);

        $article = Article::find($id);

        $article->title = $request->title;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->id_category = $request->id_category;
        $article->article_seo = Str::slug($request->title);

        $image = $request->image_link;

        if($image) { //jika variabel foto memiliki inputan gambar
            File::delete('thumb/'.$article->image_link); //data foto yang lama dihapus dulu
            $filename = $image->getClientOriginalName();
            $data['gambar'] = $filename; // Update field photo
    
            Image::make($image)->save('thumb/'.$filename);
            $image->move('public/images/', $filename);

            $article->image_link = $filename;

            $article->update();
            return redirect('/adminArticle')->with(
                'message', 'Perubahan Data Artikel Berhasil diSimpan! Silahkan Cek Perubahan Produk Anda.'
            );
        }else{ //jika tidak ada inputan, maka data gambar tidak akan diupdate
            
            $article->update([
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
                'id_content' => $request->id_content,
                'article_seo' => Str::slug($request->title),
            ]);
            return redirect('/adminArticle')->with(
                'message', 'Perubahan Data artkel berhasil disimpan! Silahkan Cek Perubahan Produk Anda.'
            );
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
        $article = Article::find($id);
        $article->delete();
        File::delete('thumb/'.$article->image_link);
        File::delete('public/images'.$article->image_link);
        return redirect('/adminArticle')->with('deleteMessage', 'Data artikel berhasil dihapus! Silhkan cek perubahan data.');
    }
}
