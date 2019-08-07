<!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">@yield('level_name')
                        <span class="brand-tip">KNB</span>
                    </span>
                    <span class="brand-mini">ADM-KNB</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            {{-- <img src="./assets/img/admin-avatar.png" /> --}}
                            <span></span>{{ Auth::user()->name }}<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                            Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
<!-- END HEADER -->
<!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    {{-- <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div> --}}
                    <div class="admin-info">
                        <div class="font-strong">{{ Auth::user()->name }}</div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        @if (Auth::user()->role == 'admin')
                        <a class="active" href="/admin"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                        @elseif(Auth::user()->role == 'bendahara')
                        <a class="active" href="/bendahara"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                        @elseif(Auth::user()->role == 'donatur')
                        <a class="active" href="/donatur/dashboard"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                        @endif
                    </li>

                    {{-- SIDEBAR ADMIN --}}
                    @if (Auth::user()->role == 'admin')
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Users</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="/user/tampil">List</a>
                            </li>
                            <li>
                                <a href="/user/tambah">Input</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">Sosok Mulia</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="/sokmul/tampil">List</a>
                            </li>
                            <li>
                                <a href="/sokmul/tambah">Input</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-id-card"></i>
                            <span class="nav-label">Campaign</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="/campaign/tampil">List</a>
                            </li>
                            <li>
                                <a href="/campaign/pilih">Input</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    <li class="heading">PAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="mail_view.html">Mail view</a>
                            </li>
                            <li>
                                <a href="mail_compose.html">Compose mail</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                    {{-- SIDEBAR BENDAHARA  --}}
                     @if (Auth::user()->role == 'bendahara')
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Basic UI</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="colors.html">Colors</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cube"></i>
                            <span class="nav-label">Donasi</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="/donation/tampil">List</a>
                            </li>
                            <li>
                                <a href="#">Input</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    <li class="heading">PAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="mailbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="mail_view.html">Mail view</a>
                            </li>
                            <li>
                                <a href="mail_compose.html">Compose mail</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    {{-- END SIDEBAR BENDAHARA --}}

                    {{-- SIDEBAR DONATUR  --}}
                     @if (Auth::user()->role == 'donatur')
                    <li class="heading">FEATURES</li>
                    <li>
                        <a class="active" href="/donatur"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Halaman Utama</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cube"></i>
                            <span class="nav-label">Donasi</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="/donatur/list">List</a>
                            </li>
                            <li>
                                <a href="#">Input</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="icons.html"><i class="sidebar-item-icon fa fa-smile-o"></i>
                            <span class="nav-label">Icons</span>
                        </a>
                    </li>
                    @endif
                    {{-- END SIDEBAR DONATUR --}}
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR