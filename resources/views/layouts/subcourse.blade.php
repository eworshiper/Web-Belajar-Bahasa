<!DOCTYPE html>
<html lang="en">
@include('layouts.partial.head')

<body id="body">
    <div id="container">
        @include('layouts.partial.navbarside')

        @yield('content')
    </div>
</body>

</html>