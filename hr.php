<?php
include("./includes/authentication.php");
include("./includes/header.php");
include("./includes/topbar.php");
include("./includes/sidebar.php");

// Fetch data from the database
$query = "SELECT * FROM `employee` WHERE `role` = '2'"; // Replace 'employee' with your actual table name
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
                <th>Role</th>
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
                    <img src="<?php echo $profileImageSrc; ?>" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%;">
                  </td>
                  <td>
                    <?php
                    // Concatenate firstName, middleName, and lastName
                    $fullName = trim($employee['firstName'] . ' ' . $employee['middleName'] . ' ' . $employee['lastName']);
                    echo htmlspecialchars($fullName);
                    ?>
                  </td>
                  <td><?php echo htmlspecialchars($employee['emailAddress']); ?></td>
                  <td><?php echo htmlspecialchars($employee['role']); ?></td>
                  <td>
                    <!-- <a href="hr-edit.php?id=<?php echo htmlspecialchars($employee['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hr-delete.php?id=<?php echo htmlspecialchars($employee['id']); ?>" class="btn btn-danger btn-sm">Delete</a> -->
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

<?php
include("./includes/footer.php");
?>
