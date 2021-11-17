<?php include 'header.php'; ?>
<style>
    .fade {
        background-color: rgba(0,0,0,0.3) !important;


    }
</style>
<!-- Main Container -->
<main id="main-container">


    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title fw-bold">Personal Information</h3>
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <!-- <a href="./edit-personal-information.php" type="submit" class="btn btn-outline-light"><i class="fa fa-pencil-alt me-2"></i>Edit Profile</a> -->
                    <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-fadein"><i class="fa fa-plus me-2"></i>Edit Profile</button>
                </div>
            </div>

          
            <div class="content content-full ms-1">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="fa-ul list-icons">
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-id-badge"></i>
                                </span>
                                <div class="fw-semibold">Name</div>
                                <div class="text-muted">
                                    Chetan Chitte
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <div class="fw-semibold">Personal Email</div>
                                <div class="text-muted">
                                    webmechanic.in@gmail.com
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-id-badge"></i>
                                </span>
                                <div class="fw-semibold">Emergency Person Name</div>
                                <div class="text-muted">
                                    John Doe
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-calendar-alt"></i>
                                </span>
                                <div class="fw-semibold">Birth Date</div>
                                <div class="text-muted">
                                    Jan 11, 1984
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-user"></i>
                                </span>
                                <div class="fw-semibold">Gender</div>
                                <div class="text-muted">Male</div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-credit-card"></i>
                                </span>
                                <div class="fw-semibold">PAN</div>
                                <div class="text-muted">
                                    AIDPC0546N
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="fa-ul list-icons">
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-mobile"></i>
                                </span>
                                <div class="fw-semibold">Primary Contact No</div>
                                <div class="text-muted">
                                    2693741941
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-phone-alt"></i>
                                </span>
                                <div class="fw-semibold">Emergency Contact No</div>
                                <div class="text-muted">
                                    5805465454
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-user"></i>
                                </span>
                                <div class="fw-semibold">Emergency Person Relation</div>
                                <div class="text-muted">
                                    Brother
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-map-marker-alt"></i>
                                </span>
                                <div class="fw-semibold">Current Address</div>
                                <div class="text-muted">
                                    19303 Cicero Plaza Wadeview, RI 77380
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-address-book"></i>
                                </span>
                                <div class="fw-semibold">Permanent Address</div>
                                <div class="text-muted">
                                    15099 Roberts Haven Suite 002 New Florence, MA 73471-0184
                                </div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-address-card"></i>
                                </span>
                                <div class="fw-semibold">Aadhar No</div>
                                <div class="text-muted">
                                    900110011001
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <!-- Fade In Block Modal -->
          <div class="modal fade" id="modal-block-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Modal Title</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                  <form>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label class="form-label" for="full_name">
                                    Full Name
                                </label>
                                <input class="form-control" type="text" name="full_name" value="Chetan Chitte" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Personal Email -->
                            <div class="mb-4">
                                <label class="form-label" for="personal_email">
                                    Personal Email
                                </label>
                                <input class="form-control" type="text" name="personal_email" value="webmechanic.in@gmail.com" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Gender -->
                            <div class="mb-4">
                                <label class="form-label" for="gender">
                                    Gender
                                </label>
                                <select class="form-control form-select" name="gender">
                                    <option>-- Select One --</option>
                                    <option value="male" selected="">Male </option>
                                    <option value="female"> Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Date of Birth -->
                            <div class="mb-4">
                                <label class="form-label" for="date_of_birth">
                                    Date of Birth
                                </label>
                                <input
                                    disabled=""
                                    class="form-control js-flatpickr-dob flatpickr-input"
                                    type="hidden"
                                    name="date_of_birth"
                                    id="date_of_birth"
                                    value="1984-01-11"
                                    data-alt-input="true"
                                    data-alt-input-class="form-control"
                                    data-date-format="Y-m-d"
                                    data-alt-format="F j, Y"
                                />
                                <input class="form-control" placeholder="" disabled="" tabindex="0" type="text" readonly="readonly" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primary Phone Number -->
                            <div class="mb-4">
                                <label class="form-label" for="primary_number">
                                    Primary Phone Number
                                </label>
                                <input class="form-control" type="text" name="primary_number" value="2693741941" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Alternate Phone Number -->
                            <div class="mb-4">
                                <label class="form-label" for="alternate_number">
                                    Alternate Phone Number
                                </label>
                                <input class="form-control" type="text" name="alternate_number" value="5805465454" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- PAN Card Details -->
                            <div class="mb-4">
                                <label class="form-label" for="pan">
                                    PAN Card Details
                                </label>
                                <input disabled="" class="form-control" type="text" name="pan" value="AIDPC0546N" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Aadhar Card Details -->
                            <div class="mb-4">
                                <label class="form-label" for="aadhar_number">
                                    Aadhar Card Details
                                </label>
                                <input disabled="" class="form-control" type="text" name="aadhar_number" value="900110011001" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Present Address -->
                            <div class="mb-4">
                                <label class="form-label" for="present_address">
                                    Present Address
                                </label>
                                <textarea class="form-control" name="present_address" rows="5" id="present_address">19303 Cicero Plaza Wadeview, RI 77380</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Permanent Address -->
                            <div class="mb-4">
                                <label class="form-label" for="permanent_address">
                                    Permanent Address
                                </label>
                                <div class="form-check form-check-inline ms-3">
                                    <input type="checkbox" class="form-check-input" id="permanent_address_checkbox" name="permanent_address_checkbox" />
                                    <label class="form-label form-check-label fw-normal" for="permanent_address_checkbox">
                                        Same as Present Address
                                    </label>
                                </div>
                                <textarea class="form-control" name="permanent_address" rows="5" id="permanent_address">15099 Roberts Haven Suite 002 New Florence, MA 73471-0184</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="pt-3 pb-4 text-center">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update Employee Record</button>
                    </div>
                </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- END Fade In Block Modal -->
        </div>
         
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include 'footer.php'; ?>
<!-- Page JS Plugins -->
<script src="./assets/js/dashmix.app.min.js"></script>