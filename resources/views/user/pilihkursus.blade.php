@extends('layouts.main')

@section('content')
<h3 id="titlekursus" align="center"><b>Pilih Kursus</b></h3>
<div class="row row-cols-1 row-cols-md-3 g-4" style="padding-left: 150px; padding-right: 150px; padding-bottom: 30px">

    <!-- Kursus Inggris -->
    <div class="col">
        <div id="kartu" class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/US_flag_51_stars.svg/1235px-US_flag_51_stars.svg.png"
                height="224" class="card-img-top">
            <div class="card-body">
                <h5 id="titlekartu" class="card-title"><b>Inggris (AS)</b></h5>
                <h5 id="kontenkartu" class="card-text">Pada kursus ini, kamu akan belajar mengenai grammar, basic
                    conversation, listening, speech, dan essay-writing.</p>
            </div>
            <div class="card-footer">
                <center>
                    <form action="/Kursus" method="get">
                        <input type="hidden" name="Kursus" value="Inggris">
                        <button id="pilih" type="submit" class="btn"><b>Pilih</b></button>
                    </form>
                </center>
            </div>
        </div>
    </div>

    <!-- Kursus Jepang -->
    <div class="col">
        <div id="kartu" class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1200px-Flag_of_Japan.svg.png"
                height="224" class="card-img-top">
            <div class="card-body">
                <h5 id="titlekartu" class="card-title"><b>Jepang</b></h5>
                <h5 id="kontenkartu" class="card-text">Pada kursus ini, kamu akan belajar mengenai kosakata dasar,
                    bilangan, penulisan jepang, dan percakapan dasar.</p>
            </div>
            <div class="card-footer">
                <center><a id="pilih" href="#" type="button" class="btn"><b>Pilih</b></a></center>
            </div>
        </div>
    </div>
    <div class="col">
        <div id="kartu" class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/1280px-Flag_of_the_People%27s_Republic_of_China.svg.png"
                height="224" class="card-img-top">
            <div class="card-body">
                <h5 id="titlekartu" class="card-title"><b>Mandarin</b></h5>
                <h5 id="kontenkartu" class="card-text">Segera!</p>
            </div>
            <div class="card-footer">
                <center><a id="pilih" href="#" type="button" class="btn disabled"><b>Pilih</b></a></center>
            </div>
        </div>
    </div>
    <div class="col">
        <div id="kartu" class="card h-100">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/255px-Flag_of_South_Korea.svg.png"
                height="224" class="card-img-top">
            <div class="card-body">
                <h5 id="titlekartu" class="card-title"><b>Korea</b></h5>
                <h5 id="kontenkartu" class="card-text">Segera!</p>
            </div>
            <div class="card-footer">
                <center><a id="pilih" href="#" type="button" class="btn disabled"><b>Pilih</b></a></center>
            </div>
        </div>
    </div>
</div>
@endsection