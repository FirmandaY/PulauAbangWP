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
            <h4>Tambah Konten About Us</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <h4>Silahkan Lengkapi Data About Us Berikut :</h4>
                <form method="post" action="{{route('adminAbout.store')}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Gambar</strong></label> <br>
                        <input id="inpFile" class="boxisi" type="file" name="foto" value="{{old('foto')}}"><br>
                        <i>*gambar disarankan landscape, 1920 x 1280, max:5MB</i>
                        <div class="preview-box" id="imagePreview">
                            <img src="" class="preview-img" alt="Image Preview">
                            <span class="preview-text">Image Preview</span>
                        </div>
                    </p>
                    <p> 
                        <label><strong>Tentang Kami</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="tentangkami" id="tentangkami" value="">
                            Ceritakan tentang Mewah... {{old('tentangkami')}}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'tentangkami' );
                        </script>
                    </p>
                    
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminAbout') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection