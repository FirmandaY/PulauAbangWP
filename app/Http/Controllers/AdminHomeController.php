<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Kategori;
use App\ProdukLain;
use App\Pesan;
use File;
use Image;


class AdminHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_time = Carbon::now()->toDateTimeString();
        $batas = 5;
        $data_category = Category::all();
        $article = Article::all();
        $data_pesan = Pesan::orderBy('id','desc')->paginate($batas);

        $jumlah_harga = ProdukLain::sum('harga');
        $jumlah_produk = ProdukLain::sum('jml_unit');
        $jenis_produk = ProdukLain::count();
       

        return view('home', compact(
            'data_category', 'article', 'data_pesan')
        );
    }

    public function helpPage(){
        $data_kategori = Kategori::all();
        return view('Admin.help', compact('data_category'));
    }
}
