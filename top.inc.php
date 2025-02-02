<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

}else{
   header('location:login.php');
   die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Admin Dashboard </title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                 <li class="menu-title">MENIU</li>
				   
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_tari.php" > ȚĂRI </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_orase.php" > ORAȘE </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_destinatii.php" > DESTINAȚII </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_hoteluri.php" > HOTELURI </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_rezervari_citybreak.php" > REZERVARI CITY BREAK </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_tur.php" > REZERVARI TUR </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_rezervari_intrari.php" > REZERVARI INTRARI </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_admin.php" > ADMIN </a>
                   </li>
                   <li class="menu-item-has-children dropdown">
                   <a href="categories_user.php" > UTILIZATORI </a>
                   </li>
                    <li class="menu-item-has-children dropdown">
                   <a href="categories_citybreak_tur.php" > OFERTE </a>
                   </li>
                    <li class="menu-item-has-children dropdown">
                   <a href="categories_contactari.php" > CONTACTĂRI </a>
                   </li>
			


				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                 <a href="index.php">TripTrak</a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/MyLogo.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BUN VENIT <?php echo $_SESSION['ADMIN_USERNAME']?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout_admin.php"><i class="fa fa-power-off"></i>DECONECTARE</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
