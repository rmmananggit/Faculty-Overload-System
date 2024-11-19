<?php
 include("./includes/authentication.php");
 include("./includes/header.php");
 include("./includes/topbar.php");
 include("./includes/sidebar.php");
?>

<div class="col-lg-12">
  <div class="pagetitle">
    <h1>Add Staff</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Employee Management</li>
        <li class="breadcrumb-item">Employee</li>
        <li class="breadcrumb-item active">Add Staff</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="row">
  

    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title">Personal Data</h5>
          <!-- Custom Styled Validation -->
          <form class="row g-3 needs-validation" method="POST" action="./controller/staff-add.php" novalidate autocomplete="off">

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

            <div class="col-12">
              <div class="d-flex justify-content-end">
                <button class="btn btn-secondary me-2" type="button">Cancel</button>
                <button class="btn btn-primary" type="submit" name="addStaff">Save</button>
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
