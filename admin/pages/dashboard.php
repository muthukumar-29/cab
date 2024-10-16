 <?php
    session_start();
    if ($_SESSION['username'] == null) {
        header("Location:../index.php");
    }
    include('./includes/header.php');
    include('./includes/navbar.php');
    include('./includes/db.php');
    ?>

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                         <img class="img-profile rounded-circle"
                             src="./img/undraw_profile.svg">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">

                         <a class="dropdown-item" href="#">
                             <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                             Settings
                         </a>

                         <div class="dropdown-divider"></div>
                         <form action="logout.php" method="post">
                             <input type="submit" name="logout" value="Logout" class="dropdown-item" data-toggle="modal"
                                 data-target="#logoutModal1">

                             </input>
                         </form>
                     </div>
                 </li>

             </ul>

         </nav>
         <div class="container-fluid">

             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
             </div>

             <div class="row">

                 <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-primary shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                         CABS</div>
                                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                                         <?php
                                            $data = mysqli_fetch_assoc(mysqli_query($connect, "select count(id) as count_cabs from cabs"));
                                            echo $data['count_cabs'];
                                            ?>
                                     </div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-success shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                         DRIVER</div>
                                     <div class="h5 mb-0 font-weight-bold text-gray-800">
                                         <?php
                                            $data = mysqli_fetch_assoc(mysqli_query($connect, "select count(id) as count_driver from driver"));
                                            echo $data['count_driver'];
                                            ?>
                                     </div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-info shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Rides
                                     </div>
                                     <div class="row no-gutters align-items-center">
                                         <div class="col-auto">
                                             <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                                         </div>
                                         <div class="col">
                                             <div class="progress progress-sm mr-2">
                                                 <div class="progress-bar bg-info" role="progressbar"
                                                     style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-warning shadow h-100 py-2">
                         <div class="card-body">
                             <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                         Pending Requests</div>
                                     <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                 </div>
                                 <div class="col-auto">
                                     <i class="fas fa-comments fa-2x text-gray-300"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="row">
             </div>

         </div>

     </div>
     <?php
        include('./includes/scripts.php');
        include('./includes/footer.php');
        ?>