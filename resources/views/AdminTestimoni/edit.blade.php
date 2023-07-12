@extends('layouts.app')

@section('content')
<html>
    <head>
        
    </head>
    <body>

        

        <div class="container">
            <h4>Ubah Post Testimoni</h4>
            @if (count($errors)>0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="form-container">
                <legend>Silahkan Lengkapi Data Testimoni Berikut :</legend>
                <form method="post" action="{{route('adminTestimoni.update',$testimoni->id)}}" enctype="multipart/form-data">
                @csrf
                    <p> 
                        <label><strong>Narasumber</strong></label> <br>
                        <input class="boxisi" type="text" name="sumber" value="{{ $testimoni->sumber }}">
                    </p>
                    <p> 
                        <label><strong>Testimoni Mereka</strong></label> <br>
                        <textarea class="boxisi" type="textarea" name="testimoni" id="testimoni" value="{{ $testimoni->testimoni }}">
                            {{ $testimoni->testimoni }}
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'testimoni' );
                        </script>
                    </p>
                    <div>
                        <button class="btn btn-warning" type="submit">Simpan</button>
                        <a class="btn btn-success" href="{{ route('adminTestimoni') }}"> Batal </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

@endsection