@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    {{-- <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
    </ol> --}}
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="{{asset('assets/img/photo1.png')}}" class="img-fluid w-100" id="gambar_slider" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/img/photo2.png')}}" class="img-fluid w-100" id="gambar_slider" alt="Second slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div>
    <div class="official mt-3">
        <div class="row">
            <div class="col-sm-4">
                <table cellpadding="20">
                    <tr>
                        <th colspan="">
                        <td bgcolor="red">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Lacak pengiriman</label>
                                <br>
                                <input type="text" name="nama" id="exampleFormControlInput1" placeholder="isi no resi">
                                <br>
                                <br>
                                <button type="button" onClick='inputdata()' class="btn btn-success">Simpan</button>
                            </div>
                        </td>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <!-- <div class="form-group"> -->
                <table cellpadding="20">
                    <tr>
                        <th colspan="">
                        <td bgcolor="red">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tarif pengiriman</label>
                                <br>
                                <select>
                                    <option value="" disabled selected hidden>Origin Shiphment</option>
                                    <option nama="" value="">Document</option>
                                    <option nama="" value="">Dll</option>
                                </select>
                                <label for="exampleFormControlInput1"></label>
                                <input type="text" name="nama" id="exampleFormControlInput1" placeholder="Destination">

                                <label for="exampleFormControlInput1"></label>
                                <input type="text" name="nama" id="exampleFormControlInput1" placeholder="Weight(kg)">
                                <br>
                                <br>
                                <button type="button" onClick='inputdata()' class="btn btn-success">Simpan</button>
                            </div>
                        </td>
            </div>
            </tr>
            </th>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- end main -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Butuh Bantuan</h4>
                <p class="pt-2">08:00 - 17:00 WIB / (Senin - Jumat)</p>
                <br>
            </div>
            <div class="col-sm-4">
                <h4>Tetap Terhubung Dengan Kami</h4>
                <a href="#" class="text-terhubung"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-terhubung"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-terhubung"><i class="fab fa-news"></i></a>
                <a href="#" class="text-terhubung"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-terhubung"><i class="fab fa-youtube"></i></a>
                <a href="#" class="text-terhubung"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container text-center">
        Copyright &copy; <?= date('Y');?> {{ config('app.name') }} All Reserved
        <br>
        Website JASTIP
    </div>
</div>
<!-- end footer -->
<!-- modal cari -->
<div class="modal fade" id="ModalSearch" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-search mr-2"></i> Cari Produk
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="get" action="{{ url('search') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="keyword" autocomplete="off" class="form-control"
                            placeholder="Search disini !">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal cari -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@yield('javascript')
@endsection