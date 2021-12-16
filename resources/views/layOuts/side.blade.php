<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('home') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">



            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#usersGrid" aria-expanded="false" aria-controls="usersGrid"
                    class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Users </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="usersGrid">
                    <ul class="side-nav-second-level">

                        <li>
                            <a href="{{ route('users.index') }}">
                                All Users
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#usersReports" aria-expanded="false"
                                aria-controls="usersReports">
                                <span> Reports </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="usersReports">
                                <ul class="side-nav-third-level">

                                    <li>
                                        <a href="{{ route('users.graphical') }}">
                                            Graphical
                                        </a>
                                    </li>

                                    
                                    <li>
                                        <a href="{{ route('users.excelSheet') }}">
                                            Excel Sheet
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>





        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>