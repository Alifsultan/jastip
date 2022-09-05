@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Customer</h2>
        </div>
        <br>
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
        <th>Pengiriman(cod atau langsung antar)</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($staff as $st)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $st->nama }}</td>
        <td>{{ $st->no_hp }}</td>
        <td>{{ $st->alamat_kirim }}</td>
        <td>{{ $st->nama_makanan }}</td>
        <td>{{ $st->pengiriman }}</td>
        <td>
            <input data-id="{{$st->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                data-offstyle="danger" data-toggle="toggle" data-on="SUDAH DIKIRIM" data-off="BELUM DIKIRIM"
                {{ $st->status ? 'checked' : '' }}>
        </td>
        <!-- <td>
            <form method="POST" class="d-inline"
                onsubmit="return confirm('apakah anda yakin telah mengirimkan paketnya?')"
                action="{{route('destroyer', [$st->id])}}">
                @csrf
                <input type="hidden" value="DELETE" name="_method">
                <input type="submit" value="Selesaikan" class="btn btn-danger btn-sm">
            </form>
        </td> -->
    </tr>
    @endforeach
    <script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    })
    </script>
</table>



@endsection