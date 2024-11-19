<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>

<div class="col-lg-12">
  <div class="pagetitle">
    <h1>Edit HR</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Employee Management</li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Edit HR</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="row">
  

    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">

                     <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $users = "SELECT
                                employee.userId,
                                employee.employeeId, 
                                employee.firstName, 
                                employee.middleName, 
                                employee.lastName, 
                                employee.phoneNumber, 
                                employee.emailAddress,
                                employee.userStatus
                            FROM
                                employee
                            WHERE
                                employee.userId = $id";
                        $users_run = mysqli_query($con, $users);

                        if (mysqli_num_rows($users_run) > 0) {
                            foreach ($users_run as $user) {
                    ?>
        <h5 class="card-title">Personal Data</h5>
          <!-- Custom Styled Validation -->
          <form class="row g-3 needs-validation" method="POST" action="./controller/hr-edit.php" novalidate>

            <!-- Hidden field for job_id -->
            <input type="hidden" name="userId" value="<?= $user['userId']; ?>">

          <div class="col-md-12">
          <div class="form-floating mb-3">
          <label for="validationCustom01" class="form-floating"></label>
              <input type="text" class="form-control" id="validationCustom01" value="<?= $user['employeeId']; ?>" name="employeeId" placeholder="Employee Id" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter faculty id.
              </div>
              <label for="validationCustom01">Faculty Id <span style="color: red;">*</span></label>
            </div>
          </div>


          <div class="col-md-4">
          <div class="form-floating mb-3">
          <label for="validationCustom01" class="form-floating"></label>
              <input type="text" class="form-control" id="validationCustom01" value="<?= $user['firstName']; ?>" name="firstName" placeholder="First Name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter first name.
              </div>
              <label for="validationCustom01">First Name <span style="color: red;">*</span></label>
            </div>
          </div>

          <div class="col-md-4">
          <div class="form-floating mb-3">
          <label for="validationCustom01" class="form-floating"></label>
              <input type="text" class="form-control" id="validationCustom01" value="<?= $user['middleName']; ?>" name="middleName" placeholder="Middle Name">
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter middle name.
              </div>
              <label for="validationCustom01">Middle Name <span style="color: red;">(Optional)</span></label>
            </div>
          </div>

          <div class="col-md-4">
          <div class="form-floating mb-3">
          <label for="validationCustom01"  class="form-floating"></label>
              <input type="text" class="form-control" id="validationCustom01" value="<?= $user['lastName']; ?>" name="lastName" placeholder="Last Name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter last name.
              </div>
              <label for="validationCustom01">Last Name <span style="color: red;">*</span></label>
            </div>
          </div>
         

            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input 
                        type="text" 
                        class="form-control" 
                        id="phoneNumber" 
                        name="phoneNumber"
                        placeholder="Phone Number" 
                        aria-describedby="inputGroupPrepend" 
                        pattern="\d{11}" 
                        maxlength="11" 
                        minlength="11"
                        required
                        title="Please enter an 11-digit phone number without spaces or other characters."
                        value="<?= $user['phoneNumber']; ?>"
                    >
                    <label for="phoneNumber">Phone Number <span style="color: red;">*</span></label>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid 11-digit phone number.
                    </div>
                </div>
            </div>

            
            <!-- <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input 
                    type="date" 
                    class="form-control" 
                    id="validationCustom05" 
                    placeholder="Birthday" 
                    required
                    >
                    <label for="validationCustom05">Birthday <span style="color: red;">*</span></label>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    <div class="invalid-feedback">
                    Please enter your birthday.
                    </div>
                </div>
            </div> -->

            <div class="col-md-8">
          <div class="form-floating mb-3">
          <label for="emailAddress" class="form-floating"></label>
              <input type="text" class="form-control" id="emailAddress" value="<?= $user['emailAddress']; ?>" name="emailAddress" placeholder="Email Address" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter email address.
              </div>
              <label for="emailAddress">Email Address <span style="color: red;">*</span></label>
            </div>
          </div>
          
            <div class="col-md-4">
                <label for="roleDropdown" class="form-label">Status <span style="color: red;">*</span></label>
                <select class="form-select" id="roleDropdown" name="userStatus" required>
                    <option disabled value="">Select Status</option>
                    <option value="Active" <?= $user['userStatus'] === 'Active' ? 'selected' : ''; ?>>Active</option>
                    <option value="Inactive" <?= $user['userStatus'] === 'Inactive' ? 'selected' : ''; ?>>Inactive</option>
                </select>
                <div class="invalid-feedback">Please select status.</div>
            </div>

            <div class="col-12">
              <div class="d-flex justify-content-end">
              <a href="hr.php" class="btn btn-secondary me-2" role="button">Cancel</a>
                <button class="btn btn-primary" type="submit" name="editHr">Save</button>
              </div>
          </div>
           
            </div>
          </form>
        </div>

            <?php
                            }
                        } else {
                    ?>
                          <h4 class="mt-4">No Record Found!</h4>
                    <?php
                        }
                    }
            ?>
      </div>
    </div>
  </div>
</div>

<?php
 include("./includes/footer.php");
?>
