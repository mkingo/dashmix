<link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
<link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

<?php
include './header.php';
?>

<div class="main-container">

    <!-- Hero -->

    <div class="bg-body-light mt-5">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Machine Replacement Request</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Inventory</li>

                        <li class="breadcrumb-item active" aria-current="page">Replacement Request</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- END Hero -->







    <div class="content pt-0">
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title fw-bold">Request Replacement</h3>

            </div>
            <div class="block-content">
                <form class="js-validation-signin" action="" method="POST">
                    <div class="row offset-md-3">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <label class="form-label" for="val-select2-multiple">Select Part to be Replaced <span class="text-danger">*</span></label>
                                <select class="js-select2 form-select" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least One.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Mouse">Mouse</option>
                                    <option value="Keyboard">Keyboard</option>
                                    <option value="Processor">Processor</option>
                                    <option value="Ram">Ram</option>
                                    <option value="Rom">Rom</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>

                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label my-3 " for="leave_application">
                                    <strong> Purpose of Replacement</strong>
                                </label>
                                <textarea class="form-control text-center" id="example-textarea-input" name="example-textarea-input" rows="8" placeholder="Replacement Application.."></textarea>
                            </div>
                        </div>


                        <div class="pt-3 pb-4">
                            <button type="submit" class="btn btn-lg btn-outline-primary ">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>








        </div>
    </div>
</div>




<?php

include './footer.php';
?>
<script src="assets/js/dashmix.app.min.js"></script>

<!-- jQuery (required for Select2 + jQuery Validation plugins) -->
<!-- <script src="assets/js/lib/jquery.min.js"></script> -->

<!-- Page JS Plugins -->
<script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assets/js/plugins/jquery-validation/additional-methods.js"></script>

<!-- Page JS Helpers (Select2 plugin) -->
<script>
    Dashmix.helpersOnLoad(['jq-select2']);
</script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_forms_validation.min.js"></script>