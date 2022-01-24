@extends('layouts.main')

@section('content')
<center>
    <h3 id="titlekursus"><b>Inggris (Amerika Serikat)</b></h3>
    <h5 id="konten">Kursus tersedia dalam bentuk video penjelasan materi, rekaman suara, modul kursus, dan latihan soal.
    </h5>
</center>
<div class="container" style="padding-top: 30px">
    <div class="row justify-content-around">
        <form action="/Sub-Course" method="get" class="d-grid gap-2 col-6 mx-auto">
            <input type="hidden" name="Kursus" value="Inggris">
            <input type="hidden" name="Sub-Course" value="Grammar">
            <button id="pilihjeniskursus" type="submit" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-spellcheck" viewBox="0 0 16 16">
                            <path
                                d="M8.217 11.068c1.216 0 1.948-.869 1.948-2.31v-.702c0-1.44-.727-2.305-1.929-2.305-.742 0-1.328.347-1.499.889h-.063V3.983h-1.29V11h1.27v-.791h.064c.21.532.776.86 1.499.86zm-.43-1.025c-.66 0-1.113-.518-1.113-1.28V8.12c0-.825.42-1.343 1.098-1.343.684 0 1.075.518 1.075 1.416v.45c0 .888-.386 1.401-1.06 1.401zm-5.583 1.035c.767 0 1.201-.356 1.406-.737h.059V11h1.216V7.519c0-1.314-.947-1.783-2.11-1.783C1.355 5.736.75 6.42.69 7.27h1.216c.064-.323.313-.552.84-.552.527 0 .864.249.864.771v.464H2.346C1.145 7.953.5 8.568.5 9.496c0 .977.693 1.582 1.704 1.582zm.42-.947c-.44 0-.845-.235-.845-.718 0-.395.269-.684.84-.684h.991v.538c0 .503-.444.864-.986.864zm8.897.567c-.577-.4-.9-1.088-.9-1.983v-.65c0-1.42.894-2.338 2.305-2.338 1.352 0 2.119.82 2.139 1.806h-1.187c-.04-.351-.283-.776-.918-.776-.674 0-1.045.517-1.045 1.328v.625c0 .468.121.834.343 1.067l-.737.92z" />
                            <path
                                d="M14.469 9.414a.75.75 0 0 1 .117 1.055l-4 5a.75.75 0 0 1-1.116.061l-2.5-2.5a.75.75 0 1 1 1.06-1.06l1.908 1.907 3.476-4.346a.75.75 0 0 1 1.055-.117z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Grammar (Tata Bahasa)</b>
                    </div>
                </div>
            </button>
        </form>
        <form action="" method="get" class="d-grid gap-2 col-6 mx-auto">
            <a id="pilihjeniskursus" href="#" type="button" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-megaphone" viewBox="0 0 16 16">
                            <path
                                d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Speech (Pidato)</b>
                    </div>
                </div>
            </a>
        </form>
    </div>
</div>
<div class="container" style="padding-top: 30px">
    <div class="row justify-content-around">
        <div class="d-grid gap-2 col-6 mx-auto">
            <a id="pilihjeniskursus" href="#" type="button" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Basic Conversation (Percakapan Dasar)</b>
                    </div>
                </div>
            </a>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a id="pilihjeniskursus" href="#" type="button" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-book-half" viewBox="0 0 16 16">
                            <path
                                d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Reading (Membaca)</b>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 30px">
    <div class="row justify-content-around">
        <div class="d-grid gap-2 col-6 mx-auto">
            <a id="pilihjeniskursus" href="#" type="button" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-headphones" viewBox="0 0 16 16">
                            <path
                                d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Listening (Mendengar)</b>
                    </div>
                </div>
            </a>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a id="pilihjeniskursus" href="#" type="button" class="btn">
                <div class="row justify-content-around">
                    <div class="col-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </div>
                    <div class="col-11">
                        <b>Writing (Menulis)</b>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection