@extends('layouts.app')

@section('content')
<html>
    <head>
     
    </head>
    <body>
        <div class="container">
            <h4>Tambah Kategori Artikel</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data Kategori Berikut :</h4>
                <form method="post" action="{{route('adminCategory.store')}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Nama Kategori</strong></label> <br>
                        <input class="boxisi" type="text" name="title" placeholder="Misal: Wisata, Kuliner, dsb." value="{{ old('title') }}">
                    </p>
                    <p> 
                        <label><strong>Foto Kategori</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="image_url">
                        <br>
                        <i>*gambar disarankan landscape, 1920 x 1280, max:2MB</i>
                        <div class="preview-box" id="imagePreview">
                            <img src="" class="preview-img" alt="Image Preview">
                            <span class="preview-text">Image Preview</span>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Keterangan</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="description" id="keterangan" value="">
                            Keterangan Kategori... {{ old('description') }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'keterangan' );
                        </script>
                    </p>
                    
                    <div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                        <a class="btn btn-danger" href="{{ route('adminCategory') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection