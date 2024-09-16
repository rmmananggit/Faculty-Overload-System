<?php
include("./includes/authentication.php");
include("./includes/header.php");
include("./includes/topbar.php");
include("./includes/sidebar.php");

// Fetch data from the database
$query = "SELECT * FROM `employee` WHERE `role` = '2'";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

// Fetch all rows as an associative array
$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free the result set
mysqli_free_result($result);
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
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($employees as $employee): ?>
                <tr>
                  <td>
                    <?php
                    // Check if profilePicture is not empty
                    if (!empty($employee['profilePicture'])) {
                        // Encode image data for use in data URL
                        $imageData = base64_encode($employee['profilePicture']);
                        $mimeType = 'image/jpeg'; // Adjust based on the image format stored in the database
                        $profileImageSrc = 'data:' . $mimeType . ';base64,' . $imageData;
                    } else {
                        // Default image if no image data exists
                        $profileImageSrc = './assets/img/noimage.jpg'; // Adjust path if needed
                    }
                    ?>
                    <img src="<?php echo $profileImageSrc; ?>" alt="Profile Image" style="width: 75px; height: 75px;">
                  </td>
                  <td>
                      <?php
                      // Concatenate firstName, middleName, and lastName
                      $fullName = trim($employee['firstName'] . ' ' . $employee['middleName'] . ' ' . $employee['lastName']);
                      ?>
                      <a href="hr-view.php?id=<?php echo htmlspecialchars($employee['userId']); ?>">
                        <?php echo htmlspecialchars($fullName); ?>
                      </a>
                  </td>
                  <td><?php echo htmlspecialchars($employee['emailAddress']); ?></td>
                  <td>
                      <?php
                      // Determine the badge class based on the userStatus
                      $badgeClass = $employee['userStatus'] === 'Active' ? 'bg-success' : 'bg-danger';
                      ?>
                      <span class="badge <?php echo $badgeClass; ?>">
                          <?php echo htmlspecialchars($employee['userStatus']); ?>
                      </span>
                  </td>
                  <td>
                  <a type="button" class="btn btn-primary" href="hr-edit.php?id=<?=$employee['userId'];?>"><i class="bi bi-pen"></i></a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-user-id="<?= htmlspecialchars($employee['userId']); ?>" data-redirect-to="hr.php"> <i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this account? This action cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a id="confirmDeleteButton" href="#" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

<?php
include("./includes/footer.php");
?>
