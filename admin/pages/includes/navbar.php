 <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
         <div class="sidebar-brand-icon rotate-n-15">
             <!-- <i class="fas fa-laugh-wink"></i> -->
         </div>
         <div class="sidebar-brand-text mx-3">RELAX CABS</div>
     </a>

     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="dashboard.php">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         CABS
     </div>

     <!-- Add Category -->
     <li class="nav-item">
         <a class="nav-link" href="./add_category.php">
             <i class="fas fa-fw fa-th"></i>
             <span>Category</span></a>
     </li>

     <!-- Nav Item - Cabs-->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manage-cab"
             aria-expanded="true" aria-controls="manage-cab">
             <i class="fas fa-fw fa-car"></i>
             <span>Cabs</span>
         </a>
         <div id="manage-cab" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Cars</h6>
                 <a class="collapse-item" href="./add_cabs.php">Add</a>
                 <a class="collapse-item" href="./list_cabs.php">List</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manage-driver"
             aria-expanded="true" aria-controls="manage-driver">
             <i class="fas fa-fw fa-user"></i>
             <span>Driver</span>
         </a>
         <div id="manage-driver" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Driver</h6>
                 <a class="collapse-item" href="./add_driver.php">Add</a>
                 <a class="collapse-item" href="./list_driver.php">List</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manage-packages"
             aria-expanded="true" aria-controls="manage-packages">
             <i class="fas fa-fw fa-cube"></i>
             <span>Packages</span>
         </a>
         <div id="manage-packages" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Packages</h6>
                 <a class="collapse-item" href="./add_packages.php">Add</a>
                 <a class="collapse-item" href="./list_packages.php">List</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="./settings.php">
             <i class="fas fa-fw fa-cogs"></i>
             <span>Settings</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="./logout.php">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>logout</span></a>
     </li>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>



 </ul>
 <!-- End of Sidebar -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="login.html">Logout</a>
             </div>
         </div>
     </div>
 </div>