<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.header')
</head>
<body style="background: red">

    @include('layouts.navbar')

    @role('admin')
        @include('layouts.admin-menu')
    @endrole

    @yield('content')

    @include('layouts.scripts')

</body>
</html>
