@extends('adminlte::page')

@section('title','Data Barang')

@section('content_header')

<br>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Barang Masuk</div>
                <div class="card-body">
                   <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                             <label for="">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror">
                             @error('nama_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Supplier</label>
                            <select name="id_supplier" class="form-control @error('id_supplier') is-invalid @enderror" >
                                @foreach($supplier as $data)
                                    <option value="{{$data->id}}">{{$data->nama_supplier}}</option>
                                @endforeach
                            </select>
                            @error('id_supplier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="inputMDEx1">Kategori Barang </label>
                        <br>
                       <select class="form-control" name="kategori_brg" id="exampleFormControlSelect2">
                           <option value="TKR">TKR</option>
                           <option value="RPL">RPL</option>
                           <option value="TBSM">TBSM</option>
                           <option value="Kelas">Kelas</option>
                       </select>
                        </div>
                      

                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
