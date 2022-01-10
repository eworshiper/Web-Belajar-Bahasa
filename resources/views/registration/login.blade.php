@extends('registration.regtemplate')

@section('content')
<div id="container">
    <div class="leftlogin">
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
    <div class="rightlogin">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show pt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- alert login gagal -->
        @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container" style="padding-top: 120px">
            <h2 id="titlemasuk" align="center">Masuk</h1>
                <form action="{{ route('login-user') }}" method="POST">
                    @csrf

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

                    <!-- ingat_saya -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input @error('ingat_saya') is-invalid @enderror"
                            name="ingat_saya">
                        <label id="labeldaftar" class="form-check-label">Ingat Saya</label>
                        @error('ingat_saya')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button id="tombol" type="submit" class="btn"><b>Masuk</b></button>
                </form>
                <br>
                <h6 id="labellogin">Belum punya akun? Daftar <a id="labellogin" href="/Register">di sini</a></h6>
        </div>
    </div>
</div>
@endsection