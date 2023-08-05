@extends('layouts.app')

@section('content')

   @if(Session::has('message'))
      <div class="alert alert-success">{{ Session::get('message') }}</div>
   @elseif(Session::has('message_delete'))
      <div class="alert alert-danger">{{ Session::get('message_delete') }}</div>
   @endif

   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Kategori Artikel yang Ditampilkan</h2>
            </div>
            <div>
               <a class="btn btn-primary" href="{{ route('adminCategory.create') }}">  
                  <i class="fa fa-plus-square-o" style="font-size:12px"></i>
                  Tambah Kategori
               </a>
               <br><br>
            </div>
            
            <section>
               <div class="container">
                  <div class="row justify-content-center">
                     @foreach($data_category as $kategori)
                     <div class="col-md-4">
                           <div class="card" style="margin-bottom: 50px;">
                              <img src="{{ asset('thumb/'.$kategori->image_url) }}" class="card-img-top" width="200px" height="185px" alt="...">
                              <div class="card-body">
                                 <h5 class="card-title">{{ $kategori->title }}</h5>
                                 <strong class="item-count">{!! $kategori->description !!}</strong>
                                 
                                 <form action="{{ route('adminCategory.destroy', $kategori->id) }}" method="post">
                                    @csrf
                                    <a class="btn-edit btn-warning" href="{{ route('adminCategory.edit', $kategori->id) }}"
                                       style="padding-right:8px; padding-left:8px;"
                                    > 
                                       Ubah
                                       <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn-delete btn-danger" onClick="return confirm ('Yakin mau dihapus?')"
                                       style="padding-right:5px; padding-left:5px;"
                                    >
                                       <i class="fa fa-trash"></i>Hapus 
                                    </button>
                                 </form>
                              </div>
                           </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </section>
            
            
         </div>
      </div>
         
         
   </div>
   
@endsection
               

