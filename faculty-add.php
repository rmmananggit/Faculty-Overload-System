<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>

<div class="col-lg-12 mb-2">
  <div class="pagetitle">
    <h1>Add Faculty</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Employee Management</li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Add Faculty</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Start Form -->
  <form class="row g-3 needs-validation" method="POST" action="./controller/faculty-add.php" novalidate>
    <div class="row mt-2">
      <!-- Personal Data Column -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="row">
            <h5 class="card-title">Personal Data</h5>
            <!-- Personal Data Form Fields -->
            <div class="col-md-12">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="facultyId" name="employeeId" placeholder="Faculty Id" required>
                <label for="facultyId">Faculty Id <span style="color: red;">*</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter faculty id.</div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                <label for="firstName">First Name <span style="color: red;">*</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter first name.</div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                <label for="middleName">Middle Name <span style="color: red;">(Optional)</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter middle name.</div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                <label for="lastName">Last Name <span style="color: red;">*</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter last name.</div>
              </div>
            </div>

            <div class="col-md-6">
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
                <input type="date" class="form-control" id="birthday" name="birthday" required>
                <label for="birthday">Birthday <span style="color: red;">*</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your birthday.</div>
              </div>
            </div> -->

            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" name="emailAddress" placeholder="Email Address" required>
                <label for="email">Email Address <span style="color: red;">*</span></label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter email address.</div>
              </div>
            </div>

            <!-- Address Fields -->
            <!-- <div class="col-md-3">
              <label for="regionDropdown" class="form-label">Region <span style="color: red;">*</span></label>
              <select class="form-select" id="regionDropdown" name="region" required>
                <option selected disabled value="">Select Region</option>
              </select>
              <div class="invalid-feedback">Please select a valid region.</div>
            </div>

            <div class="col-md-3">
              <label for="provinceDropdown" class="form-label">Province <span style="color: red;">*</span></label>
              <select class="form-select" id="provinceDropdown" name="province" required>
                <option selected disabled value="">Select Province</option>
              </select>
              <div class="invalid-feedback">Please select a valid province.</div>
            </div>

            <div class="col-md-3">
              <label for="municipalityDropdown" class="form-label">Municipality <span style="color: red;">*</span></label>
              <select class="form-select" id="municipalityDropdown" name="municipality" required>
                <option selected disabled value="">Select Municipality</option>
              </select>
              <div class="invalid-feedback">Please select a valid municipality.</div>
            </div>

            <div class="col-md-3">
              <label for="barangayDropdown" class="form-label">Barangay <span style="color: red;">*</span></label>
              <select class="form-select" id="barangayDropdown" name="barangay" required>
                <option selected disabled value="">Select Barangay</option>
              </select>
              <div class="invalid-feedback">Please select a valid barangay.</div>
            </div> -->
          </div>
          </div>
        </div>
      </div>

      <!-- Employment Information Column -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="row">
            <h5 class="card-title">Employment Information</h5>
            <!-- Employment Information Form Fields -->
            <!-- <div class="col-md-3">
              <label for="positionDropdown" class="form-label">Position <span style="color: red;">*</span></label>
              <select class="form-select" id="positionDropdown" name="position" required>
                <option selected disabled value="">Select Position</option>
                <option value="2">Staff</option>
                <option value="3">Faculty</option>
                <option value="4">HR</option>
              </select>
              <div class="invalid-feedback">Please select a position.</div>
            </div> -->

            <div class="col-md-6">
              <label for="departmentDropdown" class="form-label">Department <span style="color: red;">*</span></label>
              <select class="form-select" id="departmentDropdown" name="department" required>
                <option selected disabled value="">Select Department</option>
                <option value="1">Information Technology</option>
                <option value="2">Technology Communication Management</option>
                <option value="3">Computer Science</option>
                <option value="4">Data Science</option>
              </select>
              <div class="invalid-feedback">Please select department.</div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="designationDropdown" class="form-label">Designation <span style="color: red;">*</span></label>
              <select class="form-select" id="designationDropdown" name="designation" required>
                <option selected disabled value="">Select Designation</option>
                <option value="1">Dummy I</option>
                <option value="2">Dummy II</option>
              </select>
              <div class="invalid-feedback">Please select designation.</div>
            </div>

            <div class="col-md-6">
              <label for="designationDropdown" class="form-label">Employment <span style="color: red;">*</span></label>
              <select class="form-select" id="designationDropdown" name="employmentType" required>
                <option selected disabled value="">Select Employment Type</option>
                <option value="1">Part-time Employee</option>
                <option value="2">Full-time Employee</option>
              </select>
              <div class="invalid-feedback">Please select employment type.</div>
            </div>
         
            <div class="col-md-6">
              <label for="designationDropdown" class="form-label">Rank <span style="color: red;">*</span></label>
              <select class="form-select" id="designationDropdown" name="rank" required>
                <option selected disabled value="">Select Rank</option>
                <option value="3">Intructor I</option>
                <option value="4">Intructor II</option>
                <option value="5">Intructor III</option>
                <option value="6">Assistant Professor I</option>
                <option value="7">Assistant Professor II</option>
                <option value="8">Assistant Professor III</option>
                <option value="9">Assistant Professor IV</option>
                <option value="10">Assistant Professor V</option>
                <option value="11">Professor I</option>
                <option value="12">Professor II</option>
                <option value="13">Professor III</option>
                <option value="14">Professor IV</option>
                <option value="15">Professor V</option>
                <option value="16">Professor VI</option>
              </select>
              <div class="invalid-feedback">Please select rank.</div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

    <!-- Submit Buttons -->
    <div class="col-12">
      <div class="d-flex justify-content-end">
      <a href="faculty.php" class="btn btn-secondary me-2" role="button">Cancel</a>
        <button class="btn btn-primary" type="submit" name="facultyAdd">Save</button>
      </div>
    </div>
  </form>
  <!-- End Form -->
</div>

<?php
 include("./includes/footer.php");
?>
