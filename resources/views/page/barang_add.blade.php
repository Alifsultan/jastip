@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Barang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barang.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger container">
    <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No HP:</strong>
                <input type="tel" name="no_hp" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat kirim:</strong>
                <input type="text" class="form-control" name="alamat_kirim" placeholder="Alamat Kirim"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga barang dan jasa:</strong>
                <input type="number" name="harga_barjas" min="5000" step="1000" class="form-control"
                    placeholder="Harga barang dan jasa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pengiriman:</strong>
                <p><input type='checkbox' name='pengiriman' value='COD' />COD</p>
                <p><input type='checkbox' name='pengiriman' value='Langsung Antar' />Langsung diantar</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total harga:</strong>
                <input type="number" name="total_harga" min="5000" step="1000" class="form-control"
                    placeholder="Total harga">
            </div>
        </div>
        <br>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection