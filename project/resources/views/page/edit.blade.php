@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Biodata</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('staff.index') }}"> Kembali</a>
        </div>
    </div>
</div>
<br>

@if ($errors->any())
<div class="alert alert-danger container">
    <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('staff.update',$staff->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container">
        <div class="container">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" value="{{ $staff->nama }}" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>No HP:</strong>
                <input type="tel" pattern="\(\d\d\d\d\)-\d\d\d\d\d\d\d\d" name="no_hp" value="{{ $staff->no_hp }}"
                    class="form-control" placeholder="(9999)-999999999">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Alamat kirim:</strong>
                <input type="text" class="form-control" value="{{ $staff->alamat_kirim }}" name="alamat_kirim"
                    placeholder="Alamat Kirim"></input>
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Nama Makanan:</strong>
                <input type="text" name="nama_makanan" value="{{ $staff->nama_makanan }}" class="form-control"
                    placeholder="Nama Makanan">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Harga barang dan jasa:</strong>
                <input type="number" name="harga_barjas" min="5000" step="1000" value="{{ $staff->harga_barjas }}"
                    class="form-control" placeholder="Harga barang dan jasa">
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>pengiriman:</strong>
                <p><input type='checkbox' name='pengiriman' value="COD" />COD</p>
                <p><input type='checkbox' name='pengiriman' value="Langsung Antar" />langsung diantar</p>
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <strong>Total harga:</strong>
                <input type="number" name="total_harga" min="5000" step="1000" value="{{ $staff->total_harga }}"
                    class="form-control" placeholder="Total harga">
            </div>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center container">
            <button type="submit" class="btn btn-primary">EDIT</button>
        </div>
    </div>

</form>
@endsection