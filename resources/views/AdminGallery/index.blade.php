@extends('layouts.app')

@section('content')
<html>
    <head>
       
    </head>
    <body>
         
        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @elseif(Session::has('deleteMessage'))
            <div class="alert alert-danger">{{ Session::get('deleteMessage') }}</div>
        @endif

        <div class="flex-center position-ref">
            
            <div class="content">

                <div class="title m-b-md">
                    Koleksi Gambar Pulau Abang
                </div>

                <form action="{{ route('adminGallery.search') }}" method="get">
                    @csrf
                    <button class="btn-search btn-outline-dark">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" name="kata" class="form-searchbox" placeholder="Cari galeri..." >
                </form>

                <table class="table table-striped" border="2" align="center">
                    @foreach($data_gallery as $galeri)
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id</th>
                            <th>Gambar</th>
                            
                            <th colspan="7">Deskripsi</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td rowspan="3">{{ ++$num }}</td>
                                <td rowspan="3">{{ $galeri->id }}</td>
                                <td rowspan="3">
                                    <a href="{{ asset('thumb/'.$galeri->image_url) }}" data-lightbox="image-1" data-title="{{ $galeri->title }}">
                                        <img src="{{ asset('thumb/'.$galeri->image_url) }}" style="width: 250px; height: 150px" >
                                    </a>
                                </td>
                               
                                <td>
                                    <form action="{{ route('adminGallery.destroy', $galeri->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger" onClick="return confirm ('Yakin mau dihapus?')">
                                            <i class="fa fa-trash"></i>Hapus 
                                        </button>
                                    </form>
                                    <form action="{{ route('adminGallery.edit', $galeri->id) }}" method="get">
                                        @csrf
                                        <button class="btn btn-warning" onClick="return confirm ('Yakin mau diubah?')"
                                        style="padding-right: 20px; padding-left: 20px; margin-top:5px;"> 
                                            <i class="fa fa-pencil"></i>Edit 
                                        </button>
                                    </form>
                                </td>
                                    <tr>
                                        <th>Judul Gambar</th>
                                        <th>Merk Produk</th>
                                    </tr>
                                
                                    <tr>
                                        <td>{{ $galeri->image_title }}</td>
                                    </tr>
                                    <tr ><td colspan="11"></td></tr>
                            </tr>
                    </tbody>
                    
                    @endforeach

                    <tr>
                        <td colspan="13"><p align="center">
                            <a class="btn btn-primary" href="{{ route('adminGallery.create') }}"> Tambah Gambar </a>
                        </p></td>
                    </tr>
                </table>
                
                <div>{{$data_gallery->links()}}</div>
                
                <br> <br>

            </div>
        </div>
        
    </body>
</html>

@endsection