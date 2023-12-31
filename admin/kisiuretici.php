<?php


include_once 'includes/baglan.php';
session_start();


if(isset($_SESSION['uid']) && isset($_SESSION['username'])){
    $uid = $_SESSION['uid'];
	 $username = $_SESSION['username'];
	 
	 $sql_account = "SELECT * FROM users WHERE uid = ? ";
     $stmt = $con->prepare($sql_account) or die ($con->error);
     $stmt->bind_param('s',$uid);
     $stmt->execute();
     $result_account = $stmt->get_result();
     $row = $result_account->fetch_assoc();


     $sql_count_users = "SELECT * FROM users";
     $query_count_users = $con->prepare($sql_count_users) or die ($con->error);
     $query_count_users->execute();
     $result_count_users = $query_count_users->get_result();
     $total_users = $result_count_users->num_rows;
	 
	 
}else{
    ?>
    <script>
        window.location.href="auth/auth-login.php";
    </script>
    <?php
}

?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="TeamJitem">
        <meta name="keywords" content="jitemchecker, jitem checker, jitem, checker, credit card, credit card checker, ccn, ccn checker, cc checker, tr checker, tr cc checker, usa cc checker, card checker, bin, bin checker, cc duzenleyici, mernis, mernis 2021, kisi sorgu, kisi sorgu 2021, tc kimlik sorgu, tc sorgu, tc sorgu 2021, numara sorgu, numara sorgu 2021, kimlik sorgu, kisi bul 2021"/>
		<meta name="description" content="JitemChecker, Piyasanın en iyi ve en hızlı cc checker sitesidir. Data düzeltici, Account checker, Bin checker vb. birçok hizmeti ücretsiz sağlamaktadır. https://discord.gg/JvpMh4xkPe"/>
    <title>JitemCheck - Kişi Üretici</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href=".assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

 <?php
        include_once("includes/header.php");
        ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
<?php
        include_once("includes/menu.php");
        ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Kişi Üretici</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="anasayfa">Ana Sayfa</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Diğer Araçlar</a>
                                    </li>
                                    <li class="breadcrumb-item active">Kişi Üretici
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
        include_once("includes/drop.php");
        ?>
            </div>
			<div class="alert alert-danger" role="alert">
                                            <div class="alert-body">
											<i data-feather="info" class="me-50"></i>
                                                Burada üreteceğiniz bilgiler tamamen gerçek kişilere ait olup , bilgiler ile yapacağınız <b>işlemlerden siz sorumlusunuzdur.
                                            </div>
                                        </div>
			<div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">JitemCheck Gerçek Kişi Üretici</h4>
                                </div>
								<form action="" method="post">
                                <div class="card-body">
                                    <div class="row">
										<div class="content-body">
                <section id="bootstrap-toasts">
									<button class="btn btn-relief-info toast-basic-toggler mt-2" type="button" name="yolla">Kişi Üret</button></form>
                                      <div class="toast-container">
                                        <div class="toast basic-toast position-fixed top-0 end-0 m-2" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <img src="app-assets/images/logo/logo.png" class="me-1" alt="Toast image" height="18" width="25" />
                                                <strong class="me-auto">JitemCheck Sitesinden Mesaj</strong>
                                                <small class="text-muted">az önce</small>
                                                <button type="button" class="ms-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                            <div class="toast-body">Bu sunucu şu anda bakımdadır, açıldığında Freemium üyelerde kullanabilecektir.</div>
									</div>
                                </div>
                        </div>
                    </div>
					    </div>
                        </div>
                    </div>
					    </div>
                        </div>
                    </div>
                </section>
			  <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">SONUÇ PANELI</h4>
                            </div>
                            <div class="card-body">
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>TC</th>
                                            <th>ADI</th>
                                            <th>SOYADI</th>
                                            <th>ANAADI</th>
                                            <th>BABAADI</th>
											<th>DOGUMYERI</th>
                                            <th>DOGUMTARIHI</th>
                                            <th>CINSIYET</th>
                                            <th>NUFUSILI</th>
                                            <th>NUFUSILCESI</th>
											<th>ADRESIL</th>
                                            <th>ADRESILCE</th>
                                            <th>MAHALLE</th>
                                            <th>CADDE</th>
                                            <th>KAPINO</th>
											<th>DAIRENO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
	    </div>
		    </div>
			    </div>
	 <?php
        include_once("includes/ayar.php");
        ?>


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
       <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="anasayfa.php" target="_blank">JitemCheck</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Crafted with<i data-feather="heart"></i><a href="anasayfa.php"> JitemCheck Global LLC</a></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
	<script src="app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
	<script src="app-assets/js/scripts/components/components-bs-toast.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
