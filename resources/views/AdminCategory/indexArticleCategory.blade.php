@extends('layouts.app')

@section('content')
<html>
    <head>
       
    </head>
    <body>
         
        @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @elseif(Session::has('message_delete'))
            <div class="alert alert-danger">{{ Session::get('message') }}</div>
        @endif

        <div class="flex-center position-ref">
            
            <div class="content">

                <div class="title m-b-md">
                    Daftar {{ $category->title }}
                </div>

                <form action="{{ route('adminArticle.search') }}" method="get">
                    @csrf
                    <button class="btn-search btn-outline-dark">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" name="kata" class="form-searchbox" placeholder="Cari {{ $category->title }}" >
                </form>

                <table class="table table-striped" border="2" align="center">
                    @foreach($articles as $data)
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id</th>
                            <th>Gambar</th>
                            
                            <th colspan="7">Konten Artikel</th>
                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td rowspan="3">{{ ++$no }}</td>
                                <td rowspan="3">{{ $data->id }}</td>
                                <td rowspan="3">
                                    <img src="{{ asset('thumb/'.$data->image_link) }}" style="width: 150px; height: 100px" > <br>
                                    <a class="btn-lihat btn-success" href="{{ asset('thumb/'.$data->image_link) }}" data-lightbox="image-1" data-title="{{ $data->title }}">
                                        Lihat
                                    </a>
                                </td>
                                <td colspan="7">{!! $data->content !!}</td>
                                <td>
                                    <form action="{{ route('adminArticle.destroy', $data->id) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger" onClick="return confirm ('Yakin mau dihapus?')">
                                            <i class="fa fa-trash"></i>Hapus 
                                        </button>
                                    </form>
                                    <form action="{{ route('adminArticle.edit', $data->id) }}" method="get">
                                        @csrf
                                        <button class="btn btn-warning" onClick="return confirm ('Yakin mau diubah?')" 
                                        style="padding-right: 20px; padding-left: 20px; margin-top:5px;"> 
                                            <i class="fa fa-pencil"></i>Edit 
                                        </button>
                                    </form>
                                    {{-- <form action="{{ route('galeri.produklain', $data->merk) }}" method="get">
                                        @csrf
                                        <button class="btn btn-info"  style="margin-top:5px;"> 
                                            <i class="fa fa-picture-o"></i>Galeri
                                        </button>
                                    </form> --}}
                                </td>

                            
                                
                                    <tr>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Display</th>
                                        <th>Sistem Operasi</th>
                                        <th>Harga Sewa</th>
                                        <th>Jumlah Unit</th>
                                    </tr>
                                
                                    <tr>
                                
                                        <td>{{ $data->merk }}</td>
                                        <td>{{ $data->kategoris->nama }}</td>
                                        <td>{{ $data->display }}</td>
                                        <td>{{ $data->os }}</td>
                                    
                                        <td>{{ "Rp".number_format($data->harga, 2, ',', '.') }}</td>
                                        <td>{{ $data->jml_unit }}</td>
                                    </tr>
                                    <tr ><td colspan="11"></td></tr>
                            </tr>
                        
                    </tbody>
                    
                    
                    @endforeach

                    <tr>
                        <td colspan="13"><p align="center">
                            <a class="btn btn-primary" href="{{ route('adminArticle.create') }}"> Tambah Artikel Baru </a>
                        </p></td>
                    </tr>
                    {{-- <tr>
                        <td rowspan="2" colspan="2">Keterangan</td>
                        <td colspan='11'> 
                            Jumlah Jenis Produk = {{ $jenis_produk }} Jenis <br>
                            Jumlah Total Produk = {{ $jumlah_produk }} Unit
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan='11'> Total Harga = {{ "Rp".number_format($jumlah_harga, 2, ',', '.') }} </td>
                    </tr> --}}
                </table>
                
                <div>{{$articles->links()}}</div>
                
                <br> <br>

            </div>
        </div>
        
    </body>
</html>

@endsection