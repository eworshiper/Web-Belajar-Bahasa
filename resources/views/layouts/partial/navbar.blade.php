@auth
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a id="projectname" class="navbar-brand" href="/Home"><b>Jarsa</b></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="listnavbar" class="nav-item">
                    <a id="menunavbar" class="nav-link active" aria-current="page" href="/Home">Beranda</a>
                </li>
                <li id="listnavbar" class="nav-item">
                    <a id="menunavbar" class="nav-link" href="">Kursus</a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="navbar-nav" style="padding-right: 10px">
        <li class="nav-item dropdown">
            <a id="username" class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->nama_pengguna }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a id="username" class="dropdown-item" href="">Profil</a></li>
                <li>
                    <form action="/Logout" method="post">
                        @csrf
                        <button id="username" class="dropdown-item" type="submit">Keluar</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
@else
<nav id="navbar" class="navbar navbar-expand-lg navbar navbar-light">
    <div class="container-fluid">
        <a id="projectname" class="navbar-brand" href="/"><b>Jarsa</b></a>
        <a id="loginbutton" href="/Login" type="button" class="btn"><b>Masuk</b></a>
    </div>
</nav>
@endauth