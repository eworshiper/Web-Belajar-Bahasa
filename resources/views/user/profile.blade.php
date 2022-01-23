@extends('layouts.main')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container" style="background-color: #FFFFFF; border-radius: 20px; box-shadow: 1px 0px 4px grey">
    <div class="row justify-content-center" style="margin: 50px">
        <div class="col-15">
            <form action="{{ route('update_profile') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <h3 id="titleprofil" align="center"><b>Profil</b></h5>
                    <br>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" class="col-3 col-form-label">Skor</label>
                        <div class="col-9" style="margin-top:7px">
                            <h6 id="kontenkartu">100</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="email" class="col-3 col-form-label">Email</label>
                        <div class="col-9" style="margin-top:7px">
                            <h6 id="kontenkartu">{{ auth()->user()->email }}</h6>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="name" class="col-3 col-form-label">Nama Lengkap</label>
                        <div class="col-9">
                            <h6 id="kontenkartu">{{ auth()->user()->nama_lengkap }}</h6>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="name" class="col-3 col-form-label">Nama Pengguna</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="phone" name="nama_pengguna"
                                value="{{ auth()->user()->nama_pengguna }}">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="name" class="col-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-9">
                            <h6 id="kontenkartu">{{ auth()->user()->tanggal_lahir }}</h6>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="name" class="col-3 col-form-label">NIK</label>
                        <div class="col-9">
                            <h6 id="kontenkartu">{{ auth()->user()->nik }}</h6>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="phone" class="col-3 col-form-label">Nomor Handphone</label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="phone" name="nohp"
                                value="{{ auth()->user()->nohp }}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="password" class="col-3 col-form-label">Kata Sandi Baru</label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Kata Sandi">
                        </div>
                    </div>
                    <div class="form-group row" style="margin-bottom:20px">
                        <label id="kontenkartu" for="passwordConfirm" class="col-3 col-form-label">Konfirmasi Kata Sandi
                            Baru</label>
                        <div class="col-9">
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="Konfirmasi Kata Sandi">
                        </div>
                    </div>
                    <center>
                        <div class="row justify-content-evenly" style="padding-bottom: 30px">
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button type="submit" id="btnsimpan" class="btn" name="save">Simpan</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <a id="btncancel" class="btn btn-light" href="/Home">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </center>
            </form>
        </div>
    </div>
</div>
<div class="container" style="background-color: #FFFFFF; border-radius: 20px; box-shadow: 1px 0px 4px grey">
    <div class="row justify-content-center" style="margin: 50px">
        <div class="col-15">
            <form action="">
                <div class="form-group row" style="margin-top: 20px; margin-bottom:20px">
                    <label id="kontenkartu" class="col-3 col-form-label"><b>Pesan dari Guru:</b></label>
                    <div class="col-9" style="margin-top:7px">
                        <h6 id="kontenkartu">Belajar lebih giat lagi.</h6>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection