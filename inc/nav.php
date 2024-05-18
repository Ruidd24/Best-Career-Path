<body class="hold-transition sidebar-mini layout-fixed">
    <style>
        .content-wrapper {
        margin: 0; 
        padding: 0; 
        background-image: url('../img/bg-edited.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; 
        height: 100vh !important; 
    }

    .content-wrapper::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(2px); 
        z-index: -1;
    }

    @media only screen and (max-width: 893px) {
    .nav-title1{
    display:none;
    }
    h1{
    font-size:0px !important;
    }

    }


    .user-img{
            position: absolute;
            height: 27px;
            width: 27px;
            object-fit: cover;
            left: -7%;
            top: -20%;
    }
    .btn-rounded{
            border-radius: 50px;
    }
    
    .logout-link {
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  position: relative;
}

.logout-text {
  opacity: 0;
  transition: opacity 0.2s;
  margin-left: 8px; 
}

.logout-link:hover .logout-text {
  opacity: 1;
  display:block !important;
}
.logo-container {
  text-align: center;
}

.logo-container img {
  display: inline-block;
  vertical-align: middle;
}

.brand-text {
  display: inline-block;
  vertical-align: middle;
  margin-left: 10px; 
}
.fc-daygrid-day-number,
        .fc-daygrid-day-top {
            color: gray;
        }


.fc-toolbar-title{
  font-size:17px !important;

}
.fc-view{
  margin-top:-30px !important;
}
.fc-button-primary{
  background-color:green !important;
  padding:3px !important;
}

.fc-daygrid-event{
  background-color:green !important;
  border:0px;
}
    </style>
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center" style="background-color: rgba(255, 255, 255, 0.3);">
    <img src="../img/loading.gif" alt="AdminLTELogo" height="60" width="60">
</div>
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-gradient-dark">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
</li>
<li class="nav-item d-sm-inline-block">
<img src="../img/logo.png" style="width:40px;" alt="">
</li>


<li class="nav-item d-sm-inline-block">
<a href="" class="nav-link text-white">BARANGAY LANGKAAN </span></a>
</li>

</ul>


<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a href="../inc/logout.php" id="logout" class="text-white logout-link">
      <span class="fas fa-sign-out-alt"></span>
      <span class="logout-text" style="display:none;">Logout</span>
    </a>
  </li>
</ul>


</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index.php" class="brand-link">
<div class="logo-container" style="margin-bottom:-20px;">
  <img src="../img/logo.png" alt="AdminLTE Logo" style="opacity: .8; width:60px;">
  <span class="brand-text font-weight-light h6">BIMS</span>
  <br><br>
</div>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="../dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block"><?php echo $user_role;?></a>
</div>
</div>


<?php 
if(isset($_SESSION['role']) && $_SESSION['role']== 'Admin'){
?>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-item">
<a href="index.php" class="nav-link">
<i class="nav-icon ion ion-speedometer"></i>
<p>
Dashboard
</p>
</a>
</li>


<li class="nav-item">
<a href="officials.php" class="nav-link">
<i class="nav-icon fas fa-users" style="font-size:12px;"></i>
<p>
Barangay Officials
</p>
</a>
</li>


<li class="nav-item">
<a href="certificate.php" class="nav-link">
<i class="nav-icon ion ion-document-text"></i>
<p>
Barangay Clearance
</p>
</a>
</li>

<!-- <li class="nav-item">
<a href="clearance.php" class="nav-link">
<i class="nav-icon ion ion-document-text"></i>
<p>
Barangay Clearance
</p>
</a>
</li> -->

<li class="nav-item">
<a href="indigency.php" class="nav-link">
<i class="nav-icon fas fa-medal" style="font-size:12px;"></i>

<p>
Certificate of Indigency
</p>
</a>
</li>




<li class="nav-item">
<a href="resident.php" class="nav-link">
<i class="nav-icon fas fa-users" style="font-size:12px;"></i>
<p>
Residents Management
</p>
</a>
</li>



<li class="nav-item">
<a href="complaint.php" class="nav-link">
<i class="nav-icon ion ion-alert"></i>
<p>
Complaint Management
</p>
</a>
</li>


<li class="nav-item">
<a href="account.php" class="nav-link">
<i class="nav-icon ion ion-person"></i>
<p>
Account Management
</p>
</a>
</li>

<li class="nav-item">
<a href="announcement.php" class="nav-link">
<i class="nav-icon fas fa-bullhorn" style="font-size:12px;"></i>
<p>
Anouncement
</p>
</a>
</li>


<li class="nav-item">
<a href="request.php" class="nav-link">
<i class="nav-icon ion ion-document-text"></i>
<p>
Requested Document
</p>
</a>
</li>



<li class="nav-item">
<a href="report.php" class="nav-link">
<i class="nav-icon ion ion-stats-bars"></i>
<p>
Reports
</p>
</a>
</li>


</ul>
</li>




</ul>
</nav>
<?php } ?>
</div>

</aside>