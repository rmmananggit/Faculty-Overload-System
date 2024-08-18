<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <?php
  // Get the name of the current file
  $current_page = basename($_SERVER['PHP_SELF']);
  ?>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'index.php') ? '' : 'collapsed'; ?>" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-heading">Employees Management</li>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'users.php') ? '' : 'collapsed'; ?>" href="users.php">
      <i class="ri-account-pin-box-line"></i>
      <span>Employee</span>
    </a>
  </li><!-- End Users Nav -->

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
