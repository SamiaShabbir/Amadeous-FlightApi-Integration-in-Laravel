@php
$segment = Request::segment(1);

@endphp
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0" style="z-index:1;">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" style="line-height: 25px;" href="{{ route('admin.home') }}">
                <div class="d-table m-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="..." width="30px" />
                    {{-- <i class="material-icons fs-5">admin_panel_settings</i> --}}
                    <span class="d-none d-md-inline ml-1">Admin Panel</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>

    <div class="nav-wrapper">
       @if(auth()->check() && auth()->user()->type === "admin")
            <ul class="nav flex-column">
                <div style="">
                    <li class="nav-item" id="home" data-toggle="tooltip" style="" data-placement="top"
                        title="Dashboard">
                        <a class="nav-link @if($segment == 'dashboard') active @endif" href="{{ route('admin.home') }}">
                            <i class="material-icons" style="color:#ffa7b9;">dashboard</i>
                            <span class="text-secondary"
                                style="font-size:0.9rem;">Dashboard</span>
                        </a>
                    </li>
                </div>


               <li class="nav-item" id="flight" data-toggle="tooltip" data-placement="top"
                    title="Flight Bookings">
                    <a class="nav-link  @if($segment == 'flights') active @endif" href="{{ route('admin.flight') }}">
                        <i class="material-icons">flight</i>
                        <span>Flight Bookings</span>
                    </a>
                </li>

                <li class="nav-item" id="user-management" data-toggle="tooltip" data-placement="top"
                    title="Users Management">
                    <a class="nav-link  @if($segment == 'users') active @endif" href="{{ url('users') }}">
                        <i class="material-icons">groups</i>
                        <span>Users Management</span>
                    </a>
                </li>
                <li class="nav-item" id="agent" data-toggle="tooltip" data-placement="top" title="Agents">
                    <a class="nav-link  @if($segment == 'agents') active @endif" href="{{ url('agents') }}">
                        <i class="material-icons">support_agent</i>
                        <span>Agents</span>
                    </a>
                </li>
                <li class="nav-item" id="user" data-toggle="tooltip" data-placement="top"
                    title="Customers">
                    <a class="nav-link  @if($segment == 'customers') active @endif" href="{{ url('customers') }}">
                        <i class="material-icons">groups_2</i>
                        <span>Customers</span>
                    </a>
                </li>


                <li class="nav-item" id="activity-management" data-toggle="tooltip" data-placement="top"
                    title="Payments">
                    <a class="nav-link  @if($segment == 'payments') active @endif" href="{{ route('admin.activity-management') }}">
                        <i class="material-icons">payments</i>
                        <span> Payments</span>
                    </a>
                </li>

                {{-- <li class="nav-item position-absolute bottom-0" id="logout" data-toggle="tooltip" data-placement="top"
                    title="Logout">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="material-icons">logout</i>
                        <span> Logout</span>
                    </a>
                </li> --}}
            </ul>
        @else
            <ul class="nav flex-column">
                <li class="nav-item" id="home" data-toggle="tooltip" data-placement="top" title="Dashboard">
                    <a class="nav-link" href="{{ route('agent.home') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item" id="flight" data-toggle="tooltip" data-placement="top"
                    title="Flight Bookings">
                    <a class="nav-link  @if($segment == 'flights') active @endif" href="{{ route('agent.flight') }}">
                        <i class="material-icons">flight</i>
                        <span>Flight Bookings</span>
                    </a>
                </li>
                  <li class="nav-item" id="user" data-toggle="tooltip" data-placement="top"
                    title="Customers">
                    <a class="nav-link  @if($segment == 'customers') active @endif" href="{{ url('agent/customers') }}">
                        <i class="material-icons">groups_2</i>
                        <span>Customers</span>
                    </a>
                </li>
                <li class="nav-item position-absolute bottom-0" id="logout" data-toggle="tooltip" data-placement="top"
                    title="Logout">
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <i class="material-icons text-danger"></i><span> Logout</span> </a>
                </li>

            </ul>
        @endif
    </div>


</aside>
