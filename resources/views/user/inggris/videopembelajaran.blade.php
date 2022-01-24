@extends('layouts.subcourse')

@section('content')

<div class="rightkursus">
    <div id="video" class="embed-responsive embed-responsive-16by9">
        @foreach ($link as $url)
        <iframe width="708" height="400" src="{{ $url->link_video }}" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        @endforeach
    </div>
    <div class="buttonpositionvideo">
        <div style="padding-bottom: 15px">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <a id="pilihpembelajaran" href="#" type="button" class="btn disabled">
                        <div class="row justify-content-around">
                            <div class="col-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-journals" viewBox="0 0 16 16">
                                    <path
                                        d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" />
                                    <path
                                        d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" />
                                </svg>
                            </div>
                            <div class="col-10">
                                <b>Modul Pembelajaran</b>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <form action="/Video-Pembelajaran" method="get">
                        <input type="hidden" name="Kursus" value="Inggris">
                        <input type="hidden" name="Sub-Course" value="Grammar">
                        <button id="pilihpembelajaran" type="submit" class="btn">
                            <div class="row justify-content-around">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-play-btn" viewBox="0 0 16 16">
                                        <path
                                            d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <b>Video Pembelajaran</b>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Third group">
                    <form action="/Latihan-Soal" method="get">
                        <input type="hidden" name="Kursus" value="Inggris">
                        <input type="hidden" name="Sub-Course" value="Grammar">
                        <button id="pilihpembelajaran" type="submit" class="btn">
                            <div class="row justify-content-around">
                                <div class="col-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                    </svg>
                                </div>
                                <div class="col-10">
                                    <b>Latihan Soal</b>
                                </div>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection