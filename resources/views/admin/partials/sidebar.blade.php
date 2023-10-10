<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html" title="Sleek Dashboard">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>

                <span class="brand-name text-truncate">SIMADU</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            {{-- <li class="active">
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li> --}}

                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="mdi mdi-monitor-screenshot"></span>
                                    <span class="nav-text">&nbsp; Dashboard</span>
                                </a>
                            </li>


                            @auth
                                @if (auth()->user()->role === 'admin')
                                    <li class="">

                                        <a class="sidenav-item-link" href="analytics.html">
                                            <span class="mdi mdi-account-multiple"></span>
                                            <span class="nav-text">&nbsp; Kelola Pengguna</span>
                                        </a>
                                    </li>


                                    <li class="">
                                        <a class="sidenav-item-link" href="analytics.html">
                                            <span class="mdi mdi-printer"></span>
                                            <span class="nav-text">&nbsp; Cetak Laporan</span>
                                        </a>
                                    </li>
                                @else
                                    <li class="">

                                        <a class="sidenav-item-link" href="analytics.html">
                                            <span class="mdi mdi-plus"></span>
                                            <span class="nav-text">&nbsp; Tambah Pengaduan</span>
                                        </a>
                                    </li>
                                @endif



                            @endauth


                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="mdi mdi-format-list-bulleted"></span>
                                    <span class="nav-text">&nbsp; Daftar Pengaduan</span>
                                </a>
                            </li>





                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="mdi mdi-key"></span>
                                    <span class="nav-text">&nbsp; Ubah Password</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="analytics.html">
                                    <span class="mdi mdi-logout"></span>
                                    <span class="nav-text">&nbsp; Logout</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>






            </ul>
        </div>


    </div>
</aside>
