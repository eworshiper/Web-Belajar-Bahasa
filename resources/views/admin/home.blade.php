@extends('layouts.admin')

@section('content')
@if(session()->has('admin'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('admin') }}
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
    <h3 id="titlewithicon"><b>Admin</b></h3>
</div>
<div class="row" style="padding-right: 30px; padding-left: 30px" align="center">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Announcer</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Menambahkan konten pada laman utama</h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#announcermodal" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Data Guru</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Daftar guru Jarsa</h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#modaldataguru" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="titlekartu"><b>Data Pengguna</b></h5>
                <br>
                <h5 class="card-text" id="kontenkartu">Daftar pengguna Jarsa</h5>
                <br>
                <!-- Button trigger modal -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#modaldatapengguna" class="btn"
                    id="pilih">Pilih</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Announcer-->
<div class="modal fade" id="announcermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Announcer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div> -->
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Konten:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn" id="btnsimpan">Publish</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Data Guru -->
<div class="modal fade" id="modaldataguru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <th scope="col">Nama Guru</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 0;
                        @endphp
                        @foreach($teachers as $teacher)
                        <tr>
                            <th scope="row">{{ $count+=1 }}</th>
                            <td>{{ $teacher->nama_lengkap }}</td>
                            <td>{{ $teacher->nohp }}</td>
                            <td>{{ $teacher->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modaldatapengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>

                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nama Pengguna</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tanggal Lahir</th>
                        </tr>

                    </thead>
                    <tbody>
                        @php
                        $count = 0;
                        @endphp
                        @foreach($datas as $data)
                        <tr>
                            <th scope="row">{{ $count+=1 }}</th>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->nama_pengguna }}</td>
                            <td>{{ $data->nohp }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="btncancel" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>
@endsection