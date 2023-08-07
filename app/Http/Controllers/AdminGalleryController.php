<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Gallerie;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class AdminGalleryController extends Controller
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
        $line = 10;
        $data_gallery = Gallerie::orderBy('id', 'desc')->paginate($line);
        $num = $line * ($data_gallery->currentPage()-1);

        return view('AdminGallery.index', compact('data_category', 'data_gallery', 'num'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_category = Category::all();
        $data_gallery = Gallerie::all();
        return view('AdminGallery.create', compact('data_category', 'data_gallery'));
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
            'image_url' => 'required|image|mimes:jpeg,jpg,png|max:5120',
            'image_title' => 'required|string|max:255',
        ]);

        $gallery = new Gallerie;

        $gallery->image_title = $request->image_title;
        $gallery->gallerie_seo = Str::slug($request->image_title);
        
        $image = $request->image_url;
        $filename = time().'.'.$image->getClientOriginalExtension();

        Image::make($image)->save('thumb/'.$filename);
        $image->move('public/image', $filename);

        $gallery->image_url = $filename;
        $gallery->save();

        return redirect('/adminGallery')->with('message', 'Data image berhasil ditambahkan!');
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
        $gallery = Gallerie::find($id);
        $data_category = Category::all();
        return view('AdminGallery.edit', compact('gallery', 'data_category'));
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
            'image_url' => 'image|mimes:jpeg,png,jpg|max:5120',
            'image_title' => 'required|string|max:255',
        ]);

        $gallery = Gallerie::find($id);
        $gallery->image_title = $request->image_title;
        $gallery->gallerie_seo = Str::slug($request->image_title);

        $image = $request->image_url;

        if($image) {
            File::delete('thumb/'.$gallery->image_url); //data foto yang lama dihapus dulu
            $filename = $image->getClientOriginalName();
            $data['foto'] = $filename; // Update field photo
    
            Image::make($image)->save('thumb/'.$filename);
            $image->move('public/images/', $filename);

            $gallery->image_url = $filename;

            $gallery->update();
            return redirect('/adminGallery')->with(
                'message', 'Perubahan Data Gambar Berhasil diSimpan! Silahkan Cek Perubahan Gambar Anda.'
            );
        }else{
            $gallery->update([
                'image_title' => $request->image_title,
                'galeri_seo' => Str::slug($request->image_title)
            ]);
            return redirect('/adminGallery')->with(
                'message', 'Perubahan Data Gambar Berhasil diSimpan! Silahkan Cek Perubahan Gambar Anda.'
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
        $gallery = Gallerie::find($id);
        $gallery->delete();
        File::delete('thumb/'.$gallery->image_url);
        File::delete('public/images/'.$gallery->image_url);
        return redirect('/adminGallery')->with('deleteMessage', 'Data Gambar Berhasil diHapus');
    }
}
