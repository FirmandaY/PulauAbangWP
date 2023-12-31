@extends('layouts.app')

@section('content')
<html>
    <head>
        
    </head>
    <body>
        <div class="container">
            <h4>Ubah Kategori Artikel</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data Kategori Berikut :</h4>
                <form method="post" action="{{route('adminCategory.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Nama Kategori</strong></label> <br>
                        <input class="boxisi" type="text" name="title" value="{{ $category->title }}">
                    </p>
                    <p> 
                        <label><strong>Foto Kategori</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="image_url">
                        <br>
                        <i>*gambar disarankan landscape, 1920 x 1280, max:5MB</i>
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
                                        <img class="last-img" src="{{ asset('thumb/'.$category->image_url) }}">
                                    </div>
                                    <div class="desc-text">
                                        <p>Gambar Saat Ini</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Keterangan</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="description" id="keterangan" value="">
                            {{ $category->description }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'keterangan' );
                        </script>
                    </p>
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminCategory') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection