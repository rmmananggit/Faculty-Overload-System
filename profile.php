<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>

<div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
          <?php
                        $id = $_SESSION['auth_user']['userId'];
                        $users = "SELECT `userId`, `employeeId`, `firstName`, `middleName`, `lastName`, `phoneNumber`, `birthday`, `region`, `province`, `municipality`, `barangay`, `emailAddress`, `password`, `department`, `designation`, `employmentType`, `rank`, `userStatus`, `ITL`, `DTR`, `subject`, `role`, `profilePicture`, `isVerify`, `otp`, `timeStamp` FROM `employee` WHERE `userId` = '$id'";
                        $users_run = mysqli_query($con, $users);
                        ?>
                        <?php
                        if (mysqli_num_rows($users_run) > 0) {
                            foreach ($users_run as $user) {
                        ?>
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <?php 
                if (!empty($user['profilePicture'])) {
                  // Profile picture exists, encode it in base64
                  $imageData = base64_encode($user['profilePicture']);
                  $imageSrc = 'data:image;base64,' . $imageData;
              } else {
                  // No profile picture, use default image
                  $imageSrc = './assets/img/noimage.jpg';
              }
              
              // Output the image tag with the appropriate source
              echo '<img class="rounded-circle" 
                  src="' . $imageSrc . '" 
                  alt="image" 
                  style="object-fit: cover;">';
             ?>

              <h2><?= $user['firstName']; ?> <?= $user['middleName']; ?> <?= $user['lastName']; ?> </h2>
              <h3>Administrator</h3>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                    <div class="col-lg-9 col-md-8"><?= $user['firstName']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Middle Name</div>
                    <div class="col-lg-9 col-md-8"><?= $user['middleName']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Last Name</div>
                    <div class="col-lg-9 col-md-8"><?= $user['lastName']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8">(+639) <?= $user['phoneNumber']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= $user['emailAddress']; ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="./controller/admin-user-settings.php" method="POST" enctype="multipart/form-data" autocomplete="off">

                  <input type="hidden" class="form-control" id="userId" name="userId" value="<?= $user['userId']; ?>">

                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                       <input type="file" class="form-control" name="profilePicture" accept="image/*">
                      </div>
                  </div>

                    <div class="row mb-3">
                      <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $user['firstName']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="middleName" class="col-md-4 col-lg-3 col-form-label">Middle Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="middleName" name="middleName" value="<?= $user['middleName']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $user['lastName']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="phoneNumber" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="<?= $user['phoneNumber']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="emailAddress" class="col-md-4 col-lg-3 col-form-label">Email Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control" id="emailAddress" name="emailAddress" value="<?= $user['emailAddress']; ?>">
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                    <button type="submit" name="editProfile" class="btn btn-primary">Save Changes</button>
                   </div>
                  </form><!-- End Profile Edit Form -->

                </div>
         
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="./controller/user-settings.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                  <input type="hidden" class="form-control" id="userId" name="userId" value="<?= $user['userId']; ?>">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newPassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirmPassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                    <button type="submit" name="changePassword" class="btn btn-primary">Change Password</button>
                   </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
      <?php
                            }
                        } else {
                        ?>
                            <h4>No Record Found!</h4>
                        <?php
                        }
                       ?>
    </section>

<?php
 include("./includes/footer.php");
?>