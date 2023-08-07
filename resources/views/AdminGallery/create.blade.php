@extends('layouts.app')

@section('content')
<html>
    <head>
     
    </head>
    <body>
        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="container">
            <h4>Tambah Koleksi Galeri Baru</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data Galeri Produk Berikut :</h4>
                <form method="post" action="{{route('adminGallery.store')}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                    <label><strong>Gambar</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="image_url" value="">
                        <br>
                        <i>*gambar maksimal 5MB | dimensi 1920 x 1280</i>
                        <div class="preview-box" id="imagePreview">
                            <img src="" class="preview-img" alt="Image Preview">
                            <span class="preview-text">Image Preview</span>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Judul Foto</strong></label> <br>
                        <input class="boxisi" type="text" name="image_title" placeholder="Contoh Produk dsb." value="{{ old('nama_galeri') }}">
                    </p>
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminGallery') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>

@endsection