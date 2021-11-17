<?php include 'header.php';?>

<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->

    <!-- <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Official Information</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Documents</li>

                        <li class="breadcrumb-item active" aria-current="page">Official Information</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> -->


    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content">
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title fw-bold">Edit Personal Information</h3>
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

                    <div class="pt-3 pb-4">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update Employee Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php include 'footer.php';?>
<!-- Page JS Plugins -->
<script src="./assets/js/dashmix.app.min.js"></script>
