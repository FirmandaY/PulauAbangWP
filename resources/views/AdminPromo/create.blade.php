@extends('layouts.app')

@section('content')
<html>
    <head>
     
    </head>
    <body>
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
        <div class="container">
            <h4>Buat Promo Menarik</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data Promo Berikut :</h4>
                <form method="post" action="{{route('adminPromo.store')}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label>Gambar</label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="gambar_promo"><br>
                        <i>*gambar maksimal 5MB | dimensi 1920 x 1280</i>
                        <div class="preview-box" id="imagePreview">
                            <img src="" class="preview-img" alt="Image Preview">
                            <span class="preview-text">Image Preview</span>
                        </div>
                    </p>
                    <p> 
                        <label>Judul Promo</label> <br>
                        <input class="boxisi" type="text" name="judul_promo" placeholder="Promo Holiday! etc." value="{{ old('judul_promo') }}">
                    </p>
                    <p> 
                        <label>Deskripsi Promo</label> <br>
                        <textarea class="boxisi" type="textarea" name="deskripsi_promo" id="deskripsi_promo">
                            Detail tentang promo ini... {{ old('deskripsi_promo') }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'deskripsi_promo' );
                        </script>
                    </p>
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminPromo') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection