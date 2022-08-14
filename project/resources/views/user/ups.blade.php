@extends('layouts.app')
@section('content')
<div class="ups">
    <div class="col-md-11">
        <div class="form-group">
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="" method="get">
                @csrf
                <div class="mb-3" align="center">
                    <label>UPS, ANDA TIDAK BISA MENGAKSES LAMAN INI MOHON LOGIN KEMBALI <h1 class="text-danger">*</h1>
                        </label>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection