<!doctype html>
<html lang="fa">

@include('Front::sections.head')

<body>
    @include('Front::sections.navbar')
    @include('Front::sections.mobileSidebar')

    @yield('content')

    @include('Front::sections.footer')
    @include('Front::sections.js')
</body>

</html>
