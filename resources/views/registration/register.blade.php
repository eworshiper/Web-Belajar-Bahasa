@extends('registration.regtemplate')

@section('content')
<div id="container">
    <div class="leftregister">
        <div class="container">
            <div class="row justify-content-start">
                <div id="gambar" class="col">
                    <img src="https://drive.google.com/uc?export=view&id=1heD7XzvHrZOkSY52W6QrtFumN1P-Yye2" height="500"
                        width="500">
                </div>
                <div class="col">
                    <center>
                        <h2 style="padding-top: 300px"><b>Belajar Bahasa</b></h2>
                        <p><b>Platform Belajar Bahasa Asing</b></p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="rightregister">
        <div class="container" style="padding-top: 60px">
            <h2 id="titledaftar" align="center"><b>Daftar</b></h1>
                <form style="padding-bottom: 30px" action="/Register" method="POST">
                    @csrf
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Nama
                            Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                            name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Nama Pengguna -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control @error('nama_pengguna') is-invalid @enderror"
                            name="nama_pengguna" value="{{ old('nama_pengguna') }}">
                        @error('nama_pengguna')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- NIK -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                            value="{{ old('nik') }}">
                        @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- nohp -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control @error('nohp') is-invalid @enderror" name="nohp"
                            value="{{ old('nohp') }}">
                        @error('nohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- email -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label id="labeldaftar" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" value="{{ old('password') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- setujui_kebijakan -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input @error('setujui_kebijakan') is-invalid @enderror"
                            name="setujui_kebijakan">
                        <label id="labeldaftar" class="form-check-label">Setujui Kebijakan</label>
                        @error('setujui_kebijakan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button id="tombol" type="submit" class="btn" id="tombol"><b>Daftar</b></button>
                </form>
        </div>
    </div>
</div>
@endsection