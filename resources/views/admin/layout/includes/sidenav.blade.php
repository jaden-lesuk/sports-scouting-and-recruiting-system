{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="{{route('admin.index')}}">
                    <i class="glyphicon glyphicon-list"></i> Scout Management
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">Scouts</a></li>
                    <li><a href="#">Manage Scouts</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Player Management
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="#">Manage players</a></li>
                </ul>
            </li>


        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->