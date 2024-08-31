<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>

<div class="col-lg-12">
  <div class="pagetitle">
    <h1>Add Users</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">User Management</li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Personal Data</h5>
          <!-- Custom Styled Validation -->
          <form action="./controller/add_user.php" method="POST" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="validationCustom01" name="firstName" placeholder="First Name" required>
                <label for="validationCustom01">First Name <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter first name.
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="validationCustom02" name="middleName" placeholder="Middle Name" required>
                <label for="validationCustom02">Middle Name <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter middle name.
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="validationCustom03" name="lastName" placeholder="Last Name" required>
                <label for="validationCustom03">Last Name <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter last name.
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3"> 
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number"  required>
                <!-- pattern="\d{9}" maxlength="11" minlength="11" -->
                <label for="phoneNumber">Phone Number <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter a valid 9-digit phone number.
                </div>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="validationCustom05" name="emailAddress" placeholder="Email Address" required>
                <label for="validationCustom05">Email Address <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter email address.
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="date" class="form-control" name="birthday" placeholder="Birthday" required>
                <label for="validationCustom04">Birthday <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter your birthday.
                </div>
             </div>
             </div>
         

            <h5 class="card-title">User Credentials</h5>

            <div class="col-md-12">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="validationCustom06" name="userName" placeholder="Username" required>
                <label for="validationCustom06">Username <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter Username.
                </div>
              </div>
            </div>
            
            <!-- <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="validationCustom07" placeholder="Password" required>
                <label for="validationCustom07">Password <span style="color: red;">*</span></label>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter Password.
                </div>
              </div>
            </div> -->

            <div class="col-md-4">
              <label for="roleDropdown" class="form-label">Role <span style="color: red;">*</span></label>
              <select class="form-select" id="roleDropdown" name="role" required>
                <option selected disabled value="">Select Role</option>
                <option value="2">HR</option>
                <option value="3">Faculty</option>
                <option value="4">Staff</option>
              </select>
              <div class="invalid-feedback">
                Please select a role.
              </div>
            </div>

            <div class="col-12">
              <div class="d-flex justify-content-end gap-2">
                <a href="users.php" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-primary" type="submit" name="addUser">Save</button>
              </div>
            </div>
          </form><!-- End Custom Styled Validation -->
        </div>
      </div>
    </div>
  </div>
</div>

<?php
 include("./includes/footer.php");
?>
