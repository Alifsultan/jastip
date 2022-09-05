@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Barang</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Data</a>
        </div>
        <br>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered container">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No hp</th>
        <th>Alamat kirim</th>
        <th>Nama makanan</th>
        <th>Harga barang dan jasa</th>
        <th>Pengiriman(cod atau langsung antar)</th>
        <th>Total harga</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barang as $st)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $st->nama }}</td>
        <td>{{ $st->no_hp }}</td>
        <td>{{ $st->alamat_kirim }}</td>
        <td>{{ $st->nama_barang }}</td>
        <td>{{ $st->harga_barjas }}</td>
        <td>{{ $st->pengiriman }}</td>
        <td>{{ $st->total_harga }}</td>
        <td>
            <form action="{{ route('barang.destroy',$st->id) }}" method="POST">

                <a class="btn btn-primary" href="{{ route('barang.edit',$st->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Hapus</button>


            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection