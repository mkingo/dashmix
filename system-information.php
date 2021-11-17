<?php include 'header.php'; ?>
<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="./assets/js/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" id="css-main" href="./assets/css/dashmix.min.css">

<style>
    .fade {
        background-color: rgba(0, 0, 0, 0.3) !important;


    }

    .select2-close-mask {
        z-index: 2099;
    }

    .select2-dropdown {
        z-index: 3051;
    }
</style>

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content ">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title fw-bold">System Information</h3>
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <!-- <a href="request-replacement.php" type="submit" class="btn btn-outline-light"> <i class="fa fa-plus me-2"></i>Request Replacement</a> -->
                    <!-- <a href="request-replacement.php"> <button type="button" class="btn btn-outline-light btn-light"><i class="fa fa-plus me-2"></i>Request Replacement </a></button> -->
                    <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-popout"><i class="fa fa-plus me-2"></i>Request Replacement</button>
                </div>
            </div>
            <!-- <div class="block-content block-content-full ms-1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">Component Type</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Model No.</th>
                                <th scope="col">Serial No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Mouse
                                </td>
                                <td>Apple</td>
                                <td>Magic</td>
                                <td>Not Present</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
            <div class="block-content block-content-full ms-1">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th scope="col">Component Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Model No.</th>
                            <th scope="col">Serial No.</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>
                                Mouse
                            </td>
                            <td>Apple</td>
                            <td>Magic</td>
                            <td>Not Present</td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- END Page Content -->
    <!-- Pop Out Block Modal -->
    <div class="modal fade" id="modal-block-popout" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true" style="overflow:hidden;">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Request Component Replacement</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form class="js-validation-signin" action="" method="POST">


                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label" for="val-select2-multiple">Select Parts to be Replaced <span class="text-danger">*</span></label>
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


                            <div class="pt-3 pb-4 text-center">
                                <button type="submit" class="btn btn-lg btn-outline-primary ">
                                    Submit
                                </button>
                            </div>




                        </form>
                    </div>
                    <!-- <div class="block-content block-content-full text-end bg-body">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button>
                                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Pop Out Block Modal -->
</main>
<!-- END Main Container -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(".js-example-basic-multiple").select2();
</script>





<?php include 'footer.php'; ?>
<script src="./assets/js/dashmix.app.min.js"></script>
<script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- <script src="assets/js/plugins/jquery-validation/additional-methods.js"></script> -->

<!-- Page JS Helpers (Select2 plugin) -->
<script>
    Dashmix.helpersOnLoad(['jq-select2']);
</script>
<script src="./assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<!-- <script src="./assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script> -->


<!-- Page JS Code -->
<script src="./assets/js/pages/be_tables_datatables.min.js"></script>
<!-- Page JS Code -->
<script src="assets/js/pages/be_forms_validation.min.js"></script>