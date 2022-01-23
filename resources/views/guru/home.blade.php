@extends('layouts.admin')

@section('content')
@if(session()->has('guru'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('guru') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div align="center" style="padding-top: 50px; padding-bottom: 20px">
    <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
        class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </svg>
    <h3 id="titlewithicon"><b>Guru</b></h3>
    <h6 id="konten">Mr. Rifqi</h6>
    <h6 id="konten">Guru Bahasa Inggris</h6>
</div>
<div class="row" style="padding-right: 30px; padding-left: 30px" align="center">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Data Siswa</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Informasi mengenai siswa Jarsa</h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#datasiswamodal" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Beri Feedback</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Beri masukan kepada siswa</h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#feedbackmodal" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Unggah Video Pembelajaran</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Tempelkan embed link youtube
                </h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#uploadvideo" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Data Siswa -->
<div class="modal fade" id="datasiswamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Lengkap Siswa</th>
                            <th scope="col">Kursus</th>
                            <th scope="col">Jenis Kursus</th>
                            <th scope="col">Skor Latihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Naufal Aqil Himawan</td>
                            <td>Bahasa Inggris</td>
                            <td>Grammar</td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Feedback-->
<div class="modal fade" id="feedbackmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="selectsiswa" class="col-form-label">Pilih Siswa</label>
                        <select class="form-select" aria-label="Default select example" id="selectsiswa">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Pesan:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn" id="btnsimpan">Kirim</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Upload Video -->
<div class="modal fade" id="uploadvideo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unggah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="embedvideo" class="col-form-label">Tempel Embed:</label>
                        <input type="text" class="form-control" id="embedvideo"
                            placeholder="https://www.youtube.com/embed/...">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn" id="btnsimpan">Unggah</button>
            </div>
        </div>
    </div>
</div>
@endsection