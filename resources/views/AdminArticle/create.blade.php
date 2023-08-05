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
            <h4>Tambah Artikel Baru</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h5>Silahkan Lengkapi Data Artikel Berikut :</h5>
                <form method="post" action="{{route('adminArticle.store')}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Gambar</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="image_link"><br>
                        <i>*gambar disarankan landscape, 1920 x 1280, max:2MB</i>
                        <div class="preview-box" id="imagePreview">
                            <img src="" class="preview-img" alt="Image Preview">
                            <span class="preview-text">Image Preview</span>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Title</strong></label> <br>
                        <input class="boxisi" type="text" name="title" placeholder="Judul Artikel dsb." value="{{ old('merk') }}">
                    </p>
                    <div class="form-group"> 
                        <label for="id_kategori"></strong>Kategori Artikel<strong></label> <br>
                        <select name="id_category" class="boxisi">
                            <option value="" selected>Pilih kategori artikel</option>
                            @foreach($data_category as $kategori)
                                <option value="{{$kategori->id}}">{{ $kategori->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <p> 
                        <label><strong>Deskripsi singkat</strong></label> <br>
                        <input class="boxisi" type="text" name="description" placeholder="Artikel ini berisi tentang... dsb." value="{{ old('display') }}">
                    </p>
                        
                    <p> 
                        <label><strong>Konten Artikel</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="content" id="deskripsi" value="">
                            Deskripsi lebih lengkap/detail tentang artikel ini... {{ old('deskripsi') }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'deskripsi' );
                        </script>
                    </p>
                    <div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a class="btn btn-danger" href="{{ route('adminArticle') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection