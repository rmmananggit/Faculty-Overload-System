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
        <h5 class="card-title">Personal Data</h5>
          <!-- Custom Styled Validation -->
          <form class="row g-3 needs-validation" method="POST" action="./controller/hr-add.php" novalidate>

          <div class="col-md-12">
          <div class="form-floating mb-3">
          <label for="validationCustom01" class="form-floating"></label>
              <input type="text" class="form-control" id="validationCustom01" name="employeeId" placeholder="Employee Id" required>
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
              <input type="text" class="form-control" id="validationCustom01" name="firstName" placeholder="First Name" required>
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
              <input type="text" class="form-control" id="validationCustom01" name="middleName" placeholder="Middle Name">
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
              <input type="text" class="form-control" id="validationCustom01" name="lastName" placeholder="Last Name" required>
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
              <input type="text" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email Address" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please enter email address.
              </div>
              <label for="emailAddress">Email Address <span style="color: red;">*</span></label>
            </div>
          </div>

          <!-- Address  -->
            <!-- <div class="col-md-3">
              <label for="regionDropdown" class="form-label">Region <span style="color: red;">*</span></label>
              <select class="form-select" id="regionDropdown" required>
                <option selected disabled value="">Select Region</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid region.
              </div>
            </div>
            <div class="col-md-3">
              <label for="provinceDropdown" class="form-label">Province <span style="color: red;">*</span></label>
              <select class="form-select" id="provinceDropdown" required>
                <option selected disabled value="">Select Province</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid province.
              </div>
            </div>
            <div class="col-md-3">
              <label for="municipalityDropdown" class="form-label">Municipality <span style="color: red;">*</span></label>
              <select class="form-select" id="municipalityDropdown" required>
                <option selected disabled value="">Select Municipality</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid municipality.
              </div>
            </div>
            <div class="col-md-3">
              <label for="barangayDropdown" class="form-label">Barangay <span style="color: red;">*</span></label>
              <select class="form-select" id="barangayDropdown" required>
                <option selected disabled value="">Select Barangay</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid barangay.
              </div>
            </div> -->

            <!-- <h5 class="card-title">Employment Information</h5> -->

            <!-- <div class="col-md-3">
              <label for="roleDropdown" class="form-label">Position <span style="color: red;">*</span></label>
              <select class="form-select" id="roleDropdown" required>
                <option selected disabled value="">Select Position</option>
                <option value="2">Staff</option>
                <option value="3">Faculty</option>
                <option value="4">HR</option>
              </select>
              <div class="invalid-feedback">
                Please select a role.
              </div>
            </div>

            <div class="col-md-3">
              <label for="roleDropdown" class="form-label">Designation <span style="color: red;">*</span></label>
              <select class="form-select" id="roleDropdown" required>
                <option selected disabled value="">Select Designation</option>
                <option value="2">RM</option>
                <option value="3">GWAPO</option>
                <option value="4">KAAYO</option>
              </select>
              <div class="invalid-feedback">
                Please select a role.
              </div>
            </div>

            <div class="col-md-3">
              <label for="roleDropdown" class="form-label">Department <span style="color: red;">*</span></label>
              <select class="form-select" id="roleDropdown" required>
                <option selected disabled value="">Select Department</option>
                <option value="2">Staff</option>
                <option value="3">Faculty</option>
                <option value="4">HR</option>
              </select>
              <div class="invalid-feedback">
                Please select a role.
              </div>
            </div>
  
             <div class="col-md-3">
              <label for="roleDropdown" class="form-label">Type of Employment <span style="color: red;">*</span></label>
              <select class="form-select" id="roleDropdown" required>
                <option selected disabled value="">Select Employment Type</option>
                <option value="1">Regular</option>
                <option value="2">Part-time</option>
              </select>
              <div class="invalid-feedback">
                Please select a role.
              </div>
            </div> -->

            <div class="col-12">
              <div class="d-flex justify-content-end">
                <button class="btn btn-secondary me-2" type="button">Cancel</button>
                <button class="btn btn-primary" type="submit" name="addhr">Save</button>
              </div>
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
