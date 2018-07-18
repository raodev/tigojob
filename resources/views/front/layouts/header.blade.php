<header class="topbar" id="app-header">
    <div class="container">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">

            <div class="navbar-header text-center">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('upload/logo.png')}}" alt="homepage" class="light-logo img-responsive img-fluid" />

                </a>
            </div>

            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">

                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item">
                        <form class="app-search d-none d-md-block d-lg-block">
                            <input type="text" class="form-control" placeholder="Search & enter">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link pointer"
                           href="{{ url('login')  }}"
                           @click.stop.prevent="loadView('login')"
                        >
                            <i class="ti-user"></i>
                            <span>
                                {{ __('Login / Register')  }}
                            </span>
                        </a>
                    </li>

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->

            </div>
        </nav>
    </div>
</header>