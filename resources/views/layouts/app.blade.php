<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('layouts.header')
</head>
<body>

    @include('layouts.navbar')

    <div class="mb-3"></div>
    @role('admin')
        @include('layouts.admin-menu')
    @endrole

    @yield('content')

    @include('layouts.scripts')
    @yield('scripts')

</body>
</html>
