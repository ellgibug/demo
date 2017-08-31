<div class="container">
    <ul class="nav nav-pills justify-content-center mb-3">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{route('home')}}"><b>Home</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}" href="{{route('permissions.index')}}">Permissions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('roles*') ? 'active' : '' }}" href="{{route('roles.index')}}">Roles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="{{route('users.index')}}">Users</a>
        </li>
    </ul>
</div>


