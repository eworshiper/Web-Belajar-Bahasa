@extends('layouts.subcourse')

@section('content')
<div class="rightkursus">
    <h3 id="titlekursus" align="center"><b>Soal Selesai!</b></h3>
    <h6 id="kontengrammar" align="center">Anda telah selesai mengerjakan latihan soal! Berikut jawaban dari soal-soal
        yang sudah anda kerjakan.</h6>
    <form action="">
        <div id="kontensoal" style="padding-left: 50px; padding-right: 50px; padding-bottom: 20px">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw">Where ___ you come from?</div>
                        <h6><b>True answer: do</b></h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw">What time does she ___ up?</div>
                        <h6><b>True answer: get</b></h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw">Where ___ he live?</div>
                        <h6><b>True answer: does</b></h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw"> Amanda: Do you like it?</div>
                        <div class="fw"> Jun: ___</div>
                        <h6><b>True answer: Yes, I do.</b></h6>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw">I went there ___ foot.</div>
                        <h6><b>True answer: on</b></h6>
                    </div>
                </li>
            </ol>
            <div align="center" style="padding-top: 20px">
                <a type="button" id="btncancel" class="btn" href="/Home">Halaman Utama</a>
                <a type="button" id="btnsimpan" class="btn" href="/Profile">Lihat Skor</a>
                <!-- route ke profil, ada skor -->
            </div>
        </div>
    </form>
</div>
@endsection