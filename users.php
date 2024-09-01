<?php
include("./includes/authentication.php");
include("./includes/header.php");
include("./includes/topbar.php");
include("./includes/sidebar.php");
?>
    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">User Management</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="users-add.php" class="btn btn-primary"><i class="ri-add-fill"></i> Add User</a>
              </h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <!-- <th data-type="date" data-format="YYYY/DD/MM">Birthday</th> -->
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $userId = $_SESSION['auth_user']['userId'];
                    $query = "SELECT *, employee.* FROM employee WHERE employee.userId != $userId ORDER BY employee.timeStamp DESC";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                            <tr>
                                <td><?= htmlspecialchars($row['firstName']); ?> <?= htmlspecialchars($row['middleName']); ?> <?= htmlspecialchars($row['lastName']); ?></td>
                                <td><?= htmlspecialchars($row['emailAddress']); ?></td>
                                <td>
                                    <?php
                                    // Determine the role name and badge color
                                    switch ($row['role']) {
                                        case 1:
                                            $role = 'Admin';
                                            $badge_class = 'bg-success'; // Green for Admin
                                            break;
                                        case 2:
                                            $role = 'HR';
                                            $badge_class = 'bg-secondary'; // Grey for HR
                                            break;
                                        case 3:
                                            $role = 'Faculty';
                                            $badge_class = 'bg-warning'; // Yellow for Faculty
                                            break;
                                        case 4:
                                            $role = 'Staff';
                                            $badge_class = 'bg-info'; // Light blue for Staff
                                            break;
                                        default:
                                            $role = 'Unknown';
                                            $badge_class = 'bg-danger'; // Red for Unknown
                                            break;
                                    }
                                    ?>
                                    <span class="badge <?= htmlspecialchars($badge_class); ?>">
                                        <?= htmlspecialchars($role); ?>
                                    </span>
                                </td>
                                <td><a type="button" class="btn btn-primary" href="users-view.php?id=<?= htmlspecialchars($row['userId']); ?>"> <i class="ri-eye-line"></i></a></td>    
                            </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="5">No Record Found</td>
                        </tr>
                    <?php
                    }
                    ?>
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
