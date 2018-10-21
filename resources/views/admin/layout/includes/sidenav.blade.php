{{-- Side Navigation --}}
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            E-RECRUITER
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="{{route('home')}}">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>
        @can('isAgent')
        <li>
            <a href="{{route('user')}}">
                <i class="pe-7s-user"></i>
                <p>Users</p>
            </a>
        </li>
        <li>
            <a href="{{route('table')}}">
                <i class="pe-7s-note2"></i>
                <p>Table List</p>
            </a>
        </li>
        <li>
            <a href="{{route('icons')}}">
                <i class="pe-7s-science"></i>
                <p>Icons</p>
            </a>
        </li>
        <li>
            <a href="{{route('notifications')}}">
                <i class="pe-7s-bell"></i>
                <p>Notifications</p>
            </a>
        </li>
            @endcan
        @can('isScout')
            <li>
                <a href="{{route('players')}}">
                    <i class="pe-7s-bell"></i>
                    <p>Players</p>
                </a>
            </li>

            @endcan


    </ul>
</div>
</div>
