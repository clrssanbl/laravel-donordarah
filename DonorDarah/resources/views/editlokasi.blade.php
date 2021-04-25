<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DonorDarah | Admin Dashboard</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
            <!-- animate CSS -->
            <link rel="stylesheet" href="../css/animate.css">
            <!-- owl carousel CSS -->
            <link rel="stylesheet" href="../css/owl.carousel.min.css">
            <!-- themify CSS -->
            <link rel="stylesheet" href="../css/themify-icons.css">
            <!-- flaticon CSS -->
            <link rel="stylesheet" href="../css/flaticon.css">
            <!-- magnific popup CSS -->
            <link rel="stylesheet" href="../css/magnific-popup.css">
            <!-- nice select CSS -->
            <link rel="stylesheet" href="../css/nice-select.css">
            <!-- swiper CSS -->
            <link rel="stylesheet" href="../css/slick.css">
            <!-- style CSS -->
            <link rel="stylesheet" href="../css/style.css">
            <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
            </script>
         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../css3/style.css">
    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../img/lg.png" style="height: 130px" alt="logo"></a>
                </div>

                <ul class="list-unstyled components">                    
                    <p>Admin Dashboard</p>                    
                    <li>
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Manage</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">User</a></li>
                            <li><a href="#">Order</a></li>
                            <li><a href="/berita/listberita">Manage Berita</a></li>
                            <li><a href="/lokasi/listlokasi">Manage Lokasi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="{{ route('logout') }}" class="logout" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Log Out') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                    </form>    
                    </li>
                </ul>
            </nav>
            <div id="content">
          <br><br>
        <div class="container">
           <h2>Edit Lokasi</h2>
           <form method="POST" action="/lokasi/{{ $lokasi->id}}">
           @method('put')
           @csrf
                <div class="form-group">
                        <label for="nama">Nama Rumah Sakit</label>
                        <textarea class="form-control" id="nama" name="nama" rows="3" >{{$lokasi->nama}}</textarea>
                </div>
                <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$lokasi->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Lokasi</button>
            </form>
        </div>
    </div>
</div>





<script src="../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="../js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="../js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="../js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="../js/slick.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="../js/contact.js"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="../text/javascript">
$(document).ready(function () {
 $('#sidebarCollapse').on('click', function () {
     $('#sidebar').toggleClass('active');
 });
});
</script>
</body>
</html>
