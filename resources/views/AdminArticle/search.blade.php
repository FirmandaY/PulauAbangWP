@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif

    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                Daftar Pencarian Artikel
            </div>

            @if(count($data_article))
                <div class="alert alert-success"> 
                    Ditemukan <strong>{{count($data_article)}}</strong>
                    data dengan kata: <strong>{{ $look }}</strong>
                </div>
                <table class="table table-striped" border="2" align="center">
                    @foreach($data_article as $article)
                    
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id</th>
                                <th>Gambar</th>
                                
                                <th colspan="7">Konten</th>
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td rowspan="4">{{ ++$num }}</td>
                                    <td rowspan="4">{{ $article->id }}</td>
                                    
                                    <td rowspan="4">
                                        <img src="{{ asset('thumb/'.$article->image_link) }}" style="width: 150px; height: 100px" > <br>
                                        <a class="btn-lihat btn-success" href="{{ asset('thumb/'.$article->image_link) }}" data-lightbox="image-1" data-title="{{ $article->merk }}">
                                            Lihat
                                        </a>
                                    </td>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Kategori Artikel</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                    <tr>
                                
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->articles->title }}</td>
                                        <td>{{ $article->description }}</td>
                                    </tr>
                                    <td colspan="7">{!! $article->content !!}</td>
                                    <td>
                                        <form action="{{ route('adminArticle.destroy', $article->id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-danger" onClick="return confirm ('Yakin mau dihapus?')">
                                                <i class="fa fa-trash"></i>Hapus Artikel
                                            </button>
                                        </form>
                                        <form action="{{ route('adminArticle.edit', $article->id) }}" method="get">
                                            @csrf
                                            <button class="btn btn-warning" onClick="return confirm ('Yakin mau diubah?')"
                                            style="padding-right:20px; padding-left:20px; margin-top:5px;"> 
                                                <i class="fa fa-pencil"></i>Edit Artikel
                                            </button>
                                        </form>
                                    </td>
                                    
                                        <tr ><td colspan="11"></td></tr>
                                </tr>
                            
                        </tbody>
                    
                    
                    @endforeach
                    <tr>
                        <td rowspan="2" colspan="2">Keterangan</td>
                        <td colspan='11'> 
                            Ditemukan <strong>{{count($data_article)}}</strong> dari {{ $article_category }} Jenis Artikel <br>
                        </td>
                        
                    </tr>
                </table> 
                <div>{{$data_article->links()}}</div>
                <br> <br>

            @else
                <div class="alert alert-warning"><h4> Data {{ $look }} tidak ditemukan </h4>
                <a href="/adminGallery" class="btn btn-warning">Kembali</a></div>
            @endif
        </div>
    </div>

@endsection
