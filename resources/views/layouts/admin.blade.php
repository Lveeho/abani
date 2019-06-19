<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Abani -Dashboard</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />

</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a id="test" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="profile-text caret">
                            <?php use
                                Illuminate\Support\Facades\Auth;$auth=Auth::user()
                            ?>Hi
                            @if(!empty($auth->firstname))
                              , {{ucfirst($auth->firstname)}}!
                            @endif
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="text-wrapper">
                                <p class="profile-name">
                                    @if(!empty($auth->firstname))
                                        {{ucfirst($auth->firstname)}} {{ucfirst
                                                        ($auth->lastname)}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">
                        <i class="fas fa-store mr-3"></i>
                        <span class="menu-title">Website</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title mr-3">Gebruikers</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.index')}}">
                                    <span class="menu-title">Alle gebruikers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.create')}}">
                                    <span class="menu-title">Gebruiker aanmaken</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#1" aria-expanded="false"
                       aria-controls="1">
                        <span class="menu-title mr-3">Merken</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="1">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('brands.index')}}">
                                    <span class="menu-title">Alle brands</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('brands.create')}}">
                                    <span class="menu-title">Brand toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui2" aria-expanded="false"
                       aria-controls="ui2">
                        <span class="menu-title mr-3">Producttypes</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('producttypes.index')}}">
                                    <span class="menu-title">Alle producttypes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('producttypes.create')}}">
                                    <span class="menu-title">Producttype toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui3" aria-expanded="false"
                       aria-controls="ui3">
                        <span class="menu-title mr-3">Categorieën</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui3">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('categories.index')}}">
                                    <span class="menu-title">Alle categorieën</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('categories.create')}}">
                                    <span class="menu-title">Categorie toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui4" aria-expanded="false"
                       aria-controls="ui4">
                        <span class="menu-title mr-3">Kleuren</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui4">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('colors.index')}}">
                                    <span class="menu-title">Alle kleuren</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('colors.create')}}">
                                    <span class="menu-title">Kleur toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui6" aria-expanded="false"
                       aria-controls="ui6">
                        <span class="menu-title mr-3">Batchen</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui6">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('lots.index')}}">
                                    <span class="menu-title">Alle batches</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('lots.create')}}">
                                    <span class="menu-title">Batch toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui5" aria-expanded="false"
                       aria-controls="ui5">
                        <span class="menu-title mr-3">Producten</span>
                        <i class="fas fa-chevron-down ml-4"></i>
                    </a>
                    <div class="collapse" id="ui5">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products.index')}}">
                                    <span class="menu-title">Alle producten</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products.create')}}">
                                    <span class="menu-title">Product toevoegen</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-12 px-5 mt-3">
                    @yield('content')
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                        <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                        <i class="mdi mdi-heart text-danger"></i>
                    </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<script src="{{asset('js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/misc.js')}}"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script>
    $(document).ready(function($) {
        $(".table-row").click(function() {
            window.document.location = $(this).data("href");
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
</script>

</body>

</html>
