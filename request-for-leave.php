<link rel="stylesheet" href="./assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="./assets/js/plugins/flatpickr/flatpickr.min.css">
<?php include 'header.php'; ?>

<!-- Main Container -->
<main id="main-container">
   <!-- Hero -->

   <div class="bg-body-light">
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
    </div>


    <!-- END Hero -->
    <!-- Page Content -->
    <div class="content pt-0">
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title fw-bold">Apply for Leave</h3>
            </div>
            <div class="block-content">
                <!-- Session Status -->
                <!-- Validation Errors -->
                <form class="js-validation-signin" action="https://hrassist.brandwm.com/leave-request" method="POST">
                    <input type="hidden" name="_token" value="kSLsv5DiZYFFKxTmAtU2gcW17QQRCD1TWO1Z1CDB" />
                    <div class="row">
                        <!-- <div class="col-lg-6">
                            <div class="mb-4">
                                <label class="form-label" for="leave_from">
                                    Leave From
                                </label>
                                <input class="form-control js-flatpickr js-flatpickr-enabled form-control input" placeholder="Leave, E.g.: Jan 1st, 2021" required="" tabindex="0" type="date" />
                            </div>
                        </div> -->

                        <div class="col-xl-5 mb-4">
                            <label class="form-label" for="example-flatpickr-custom">Leave From</label>
                            <input type="text" class="js-flatpickr form-control" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
                        </div>

                        <!-- <div class="col-lg-6">
                            <div class="mb-4">
                                <label class="form-label" for="leave_to">
                                    Leave To
                                </label>
                                <input class="form-control js-flatpickr js-flatpickr-enabled form-control input" placeholder="Leave, E.g.: Jan 3rd, 2021" required="" tabindex="0" type="date"  />
                            </div>
                        </div> -->
                        <div class="col-xl-5 mb-4">
                            <label class="form-label" for="example-flatpickr-custom">Leave To</label>
                            <input type="text" class="js-flatpickr form-control" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label class="form-label" for="leave_purpose">
                                    Purpose of Leave:
                                </label>
                                <input class="form-control" type="text" name="leave_purpose" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label class="form-label" for="leave_application">
                                    Leave Application:
                                </label>
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Leave Application.."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 pb-4">
                        <button type="submit" class="btn btn-lg btn-outline-primary">
                            Apply for Leave
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include 'footer.php'; ?>
<script src="./assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="./assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script>Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>