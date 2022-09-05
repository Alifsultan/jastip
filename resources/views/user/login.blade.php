@extends('layouts.app')
@section('content')
<div class="login">
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
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <div class="mb-3" align="center">
                    <label>Username <span class="text-danger">*</span></label>
                    <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                </div>
                <div class="mb-3" align="center">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection