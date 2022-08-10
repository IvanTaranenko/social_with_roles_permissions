<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="index.html">
                <!-- Logo icon image, you can use font-icon also --><b>
                    <!--This is dark logo icon--><img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                </b>
                <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
            <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="user-img" class="img-circle" style="  border-radius: 50%;
                width: 60px;height: 60px;padding-top: 2px">
            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
