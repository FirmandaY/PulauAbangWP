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
            <h4>Edit Informasi article</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data Artikel Berikut :</h4>
                <form method="post" action="{{route('adminArticle.update',$article->id)}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Gambar</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="gambar" value="{{ url('/data_file/'.$article->gambar) }}">
                        <br>
                        <i>*gambar maksimal 2MB | dimensi 1920 x 1080</i>
                        <div class="container">
                            <div class="row">
                                <div class="preview-container">
                                    <div class="" id="imagePreview">
                                        <img src="" class="preview-img" alt="Image Preview">
                                        <span class="preview-text">Image Preview</span>
                                    </div>
                                    <div class="desc-text">
                                        <p>Gambar Baru (Update)</p>
                                    </div>
                                </div>
                                <div  class="preview-container">
                                    <div class="">
                                        <img class="last-img" src="{{ asset('thumb/'.$article->image_link) }}">
                                    </div>
                                    <div class="desc-text">
                                        <p>Gambar Saat Ini</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Judul</strong></label> <br>
                        <input class="boxisi" type="text" name="title" value="{{ $article->title }}">
                    </p>
                    <p> 
                        <label><strong>Deskripsi</strong></label> <br>
                        <input class="boxisi" type="text" name="description" value="{{ $article->description }}">
                    </p>
                    <div class="form-group"> 
                        <label for="id_kategori"><strong>Kategori Artikel</strong></label> <br>
                        <select name="id_category" class="boxisi">
                            <option value="" selected>Pilih Produk</option>
                            @foreach($data_category as $kategori)
                                <option value="{{$kategori->id}}">{{ $kategori->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <p> 
                        <label><strong>Konten Artikel</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="content" id="deskripsi" value="">
                            {{ $article->content }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'deskripsi' );
                        </script>
                    </p>
                    
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminArticle') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection