<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>
    <div class="pagetitle">
      <h1>Staff</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Employee Management</li>
          <li class="breadcrumb-item active">Staff</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
              <a href="employee-add.php" class="btn btn-primary"><i class="ri-add-fill"></i> Add Staff Account</a>
              </h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Profile</th>
                    <th>ID</th>
                    <th>Load</th>
                    <!-- <th data-type="date" data-format="YYYY/DD/MM">Birthday</th> -->
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
              <tbody>
                <tr>
                    <td>Ann Rachel Petalcorin</td>
                    <td>annrachel@gmail.com</td>
                    <td>09591552657</td>
                  <td><span class="badge bg-success">HR</span></td>
                    <td>  <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></td>
                </tr>
                <tr>
                    <td>Ann Rachel Petalcorin</td>
                    <td>annrachel@gmail.com</td>
                    <td>09591552657</td>
                  <td><span class="badge bg-success">HR</span></td>
                    <td>  <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></td>
                </tr>
              </tbody>

              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

<?php
 include("./includes/footer.php");
?>