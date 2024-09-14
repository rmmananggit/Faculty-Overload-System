<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>
    <div class="pagetitle">
      <h1>HR</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Employee Management</li>
          <li class="breadcrumb-item active">HR</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
              <a href="hr-add.php" class="btn btn-primary"><i class="ri-add-fill"></i> Add HR Account</a>
              </h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <!-- <th data-type="date" data-format="YYYY/DD/MM">Birthday</th> -->
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
              <tbody>
              
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