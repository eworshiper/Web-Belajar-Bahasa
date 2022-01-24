@extends('layouts.subcourse')

@section('content')
<div class="rightkursus">
    <div align="center">
        <ul id="grammar">
            <li id="aligngrammar">
                <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                    class="bi bi-spellcheck" viewBox="0 0 16 16">
                    <path
                        d="M8.217 11.068c1.216 0 1.948-.869 1.948-2.31v-.702c0-1.44-.727-2.305-1.929-2.305-.742 0-1.328.347-1.499.889h-.063V3.983h-1.29V11h1.27v-.791h.064c.21.532.776.86 1.499.86zm-.43-1.025c-.66 0-1.113-.518-1.113-1.28V8.12c0-.825.42-1.343 1.098-1.343.684 0 1.075.518 1.075 1.416v.45c0 .888-.386 1.401-1.06 1.401zm-5.583 1.035c.767 0 1.201-.356 1.406-.737h.059V11h1.216V7.519c0-1.314-.947-1.783-2.11-1.783C1.355 5.736.75 6.42.69 7.27h1.216c.064-.323.313-.552.84-.552.527 0 .864.249.864.771v.464H2.346C1.145 7.953.5 8.568.5 9.496c0 .977.693 1.582 1.704 1.582zm.42-.947c-.44 0-.845-.235-.845-.718 0-.395.269-.684.84-.684h.991v.538c0 .503-.444.864-.986.864zm8.897.567c-.577-.4-.9-1.088-.9-1.983v-.65c0-1.42.894-2.338 2.305-2.338 1.352 0 2.119.82 2.139 1.806h-1.187c-.04-.351-.283-.776-.918-.776-.674 0-1.045.517-1.045 1.328v.625c0 .468.121.834.343 1.067l-.737.92z" />
                    <path
                        d="M14.469 9.414a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.908 1.907 3.476-4.346a.75.75 0 0 1 1.055-.117z" />
                </svg>
                <h3 id="titlegrammar"><b>Grammar (Tata Bahasa)</b></h3>
            </li>
        </ul>
    </div>
    <div id="kontengrammar">
        <h6>Materi yang akan dipelajari pada kursus ini adalah sebagai berikut.</p>
            <ol>
                <li>
                    <h6>Verb (Kata Kerja)</h6>
                </li>
                <li>
                    <h6>Adverb (Kata Keterangan)</h6>
                </li>
                <li>
                    <h6>Noun (Kata Benda)</h6>
                </li>
                <li>
                    <h6>Pronoun (Kata Ganti)</h6>
                </li>
                <li>
                    <h6>Adjective (Kata Sifat)</h6>
                </li>
                <li>
                    <h6>Conjunction (Kata Penghubung)</h6>
                </li>
                <li>
                    <h6>Preposition (Kata Depan)</h6>
                </li>
                <li>
                    <h6>Interjection (Kata Seru)</h6>
                </li>
            </ol>
    </div>
    <div class="buttonpositionkursus">
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
                    <a id="pilihpembelajaran" href="#" type="button" class="btn disabled">
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
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection