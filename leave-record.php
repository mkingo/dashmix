

<?php include 'header.php'; ?>
<link rel="stylesheet" id="css-main" href="./assets/css/dashmix.min.css">

<link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="./assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="./assets/js/plugins/flatpickr/flatpickr.min.css">
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
                <h2 class=" block-title fw-bold">Balance Leaves:</h2>
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <!-- <a href="./request-for-leave.php" type="submit" class="btn btn-outline-light"> <i class="fa fa-plus me-2"></i>New Leave Request</a> -->
                    <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-popout"><i class="fa fa-plus me-2"></i>Request For Leave</button>
                </div>

            </div>
            <div class="block-content">

                <table class="table table-striped table-bordered table-hover table-vcenter text-center">
                    <thead>
                        <tr>
                            <th>Paid Leave</th>
                            <th>Casual Leave</th>
                            <th>Sick Leave</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4.00</td>
                            <td>4.50</td>
                            <td>6.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-content">
                <h5 class="fw-medium">Current Leave Application:</h5>
                <table class="table table-striped table-bordered table-hover table-vcenter text-center">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th class="text-left">No. of Leaves</th>
                            <th class="text-left">From</th>
                            <th class="text-left">To</th>
                            <th class="text-left">Type of Leave</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">No used Leave record exists</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="block">
            <div class="block-header">
                <h3 class="block-title fw-bold">Previous Leave Records</h3>

            </div>
            <!-- Dynamic Table with Export Buttons -->


            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2%;">#</th>
                            <th style="width: 10%;">Type Of Leave</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">From</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">To</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Access</th>
                            <th style="width: 15%;">Purpose</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center">1</td>
                            <td class="d-sm-table-cell">
                                
                                <em class="text-muted">Sick Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">11th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">16th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-warning">pending</span>
                            </td>
                            <td>
                                <em class="text-muted">Shopping</em>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="d-sm-table-cell">
                                
                                <em class="text-muted">Casual Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">8th april 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">10th april 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-success">Approved</span>
                            </td>
                            <td>
                                <em class="text-muted">Very Sick</em>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="d-sm-table-cell">
                                
                                <em class="text-muted">Paid Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">18th june 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">19th june 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-danger">Declined</span>
                            </td>
                            <td>
                                <em class="text-muted">Family Outing</em>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="d-sm-table-cell">
                                
                                <em class="text-muted">Casual Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">8th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">10th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-success">Approved</span>
                            </td>
                            <td>
                                <em class="text-muted">Very Sick</em>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="d-sm-table-cell">
                                
                                <em class="text-muted">Casual Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">8th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">10th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-success">Approved</span>
                            </td>
                            <td>
                                <em class="text-muted">Shopping</em>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="d-sm-table-cell">
                               
                               <em class="text-muted">Sick Leave</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">8th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">10th may 2021</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-success">Approved</span>
                            </td>
                            <td>
                                <em class="text-muted">Very Sick</em>
                            </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table with Export Buttons -->
        <!-- Pop Out Block Modal -->
        <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apply for Leave</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form class="js-validation-signin" action="" method="POST">

                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="Type of Leave">Type Of Leave</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="sickLeave">Paid Leave</option>
                                                <option value="casualLeave">Casual Leave</option>
                                                <option value="sickLeave">Sick Leave</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="example-flatpickr-custom">Leave From</label>
                                        <input type="text" class="js-flatpickr form-control" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
                                    </div>
                                    <div class="col-md-6">
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
                                            <label class="form-label pb-3" for="leave_application">
                                                Leave Application:
                                            </label>
                                            <!-- <div id="js-ckeditor5-classic">Please Write An application to know us why?</div> -->
                                            <input type="text" id="js-ckeditor5-classic" class="ckeditor">
                                            <!-- <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Leave Application.."></textarea> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 pb-4 text-center">
                                    <button type="submit" class="btn btn-lg btn-outline-primary ">
                                        Apply for Leave
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








        
        <div class="block block-rounded">
            <div class="block-content">
                <h4 class="fw-light">Used Leaves:</h4>
                <table class="table table-striped table-bordered table-hover table-vcenter text-center">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th class="text-left">No. of Leaves</th>
                            <th class="text-left">From</th>
                            <th class="text-left">To</th>
                            <th class="text-left">Type of Leave</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center">No used Leave record exists</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<!-- <script src="./assets/js/lib/jquery.min.js"></script> -->

<!-- Page JS Plugins -->
<!-- <script src="./assets/js/dashmix.app.min.js"></script> -->

<?php include 'footer.php'; ?>
<script src="./assets/js/dashmix.app.min.js"></script>

<!-- jQuery (required for DataTables plugin) -->

<script src="./assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<!-- <script src="./assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script> -->
<!-- <script src="./assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script> -->

<!-- Page JS Code -->
<script src="./assets/js/pages/be_tables_datatables.min.js"></script>
<!-- Page JS Plugins -->





<!-- Page JS Code -->

<script src="./assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>

<!-- Page JS Helpers (CKEditor 5 plugin) -->
<script>
    Dashmix.helpersOnLoad(['js-ckeditor5']);
</script>
<script src="./assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="./assets/js/plugins/flatpickr/flatpickr.min.js"></script>
<script>
    Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);
</script>