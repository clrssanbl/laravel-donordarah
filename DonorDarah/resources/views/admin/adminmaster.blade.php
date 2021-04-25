<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DonorDarah | Admin Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css3/style.css')}}">
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/dashboard"><img src="{{asset('img/lg.png')}}" style="height: 130px" alt="image" /></a>
            </div>

            <ul class="list-unstyled components">
                <p>Admin Dashboard</p>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Manage</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="/user/listuser">User</a></li>
                        <li><a href="/donor/listdonor">Donor</a></li>
                        <li><a href="/stock">Stock Darah</a></li>
                        <li><a href="/managereq">Request</a></li>
                        <li><a href="/berita/listberita">Manage Berita</a></li>
                        <li><a href="/lokasi/listlokasi">Manage Lokasi</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>