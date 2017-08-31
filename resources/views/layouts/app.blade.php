<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.header')
</head>
<body>

    @include('layouts.navbar')

    @role('admin')
        @include('layouts.admin-menu')
    @endrole

    @yield('content')

    @include('layouts.scripts')

</body>
</html>
