<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    @if ((auth()->user()->is_admin) == 1)
    <div class="container-fluid">
        <a id="projectname" class="navbar-brand" href="/Admin"><b>Jarsa</b></a>
    </div>
    @elseif ((auth()->user()->is_guru) == 1)
    <div class="container-fluid">
        <a id="projectname" class="navbar-brand" href="/Guru"><b>Jarsa</b></a>
    </div>
    @endif
    <ul class="navbar-nav" style="padding-right: 10px">
        <li class="nav-item dropdown">
            <a id="username" class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->nama_pengguna }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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