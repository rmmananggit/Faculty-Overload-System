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

  <li class="nav-heading">User Management</li>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'hr.php') ? '' : 'collapsed'; ?>" href="hr.php">
      <i class="ri-account-pin-box-line"></i>
      <span>HR</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'staff.php') ? '' : 'collapsed'; ?>" href="staff.php">
      <i class="ri-account-circle-line"></i>
      <span>Staff</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'faculty.php') ? '' : 'collapsed'; ?>" href="faculty.php">
      <i class="ri-account-pin-circle-fill"></i>
      <span>Faculty</span>
    </a>
  </li>


  <!-- <li class="nav-heading">Employees Management</li>

  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'employee.php') ? '' : 'collapsed'; ?>" href="employee.php">
      <i class="ri-account-circle-line"></i>
      <span>Employee</span>
    </a>
  </li> -->

  <li class="nav-heading">ITL and DTR Management</li>

</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
