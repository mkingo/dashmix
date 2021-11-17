<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" id="css-main" href="./assets/css/dashmix.min.css">

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
                <h2 class="block-title fw-bold">Loan Records</h2>
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <!-- <a href="./request-for-loan.php" type="submit" class="btn btn-outline-light"> <i class="fa fa-plus me-2"></i>Request For A Loan </a> -->
                    <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-popout"><i class="fa fa-plus me-2"></i>Request For A Loan </a></button>





                </div>
            </div>



            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2%;">#</th>
                            <th style="width: 10%;">Loan Amount</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Loan Purpose</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Approval Status</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Loan Status</th>
                            <th style="width: 10%;">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center">1</td>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_blank.html">10000</a>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">Diwali Shopping</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <em class="text-muted">Approved</em>
                            </td>
                            <td class="d-sm-table-cell">
                                <span class="badge bg-danger">Declined</span>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="delete this record" data-original-title="View">
                                    <i class="si si-close"></i>
                                </a>
                            </td>




                    </tbody>
                </table>
            </div>
            <!-- Pop Out Block Modal -->
            <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                            <div class="modal-content">
                                <div class="block block-rounded block-themed block-transparent mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Apply for Loan</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <form class="" action="" method="">

                                            <div class="col-md-12">
                                                <div class="mb-5">
                                                    <label class="form-label text-dark" for="Amount">
                                                        Amount
                                                    </label>
                                                    <input class="form-control form-control" type="number" name="loan_amount" placeholder="10000" required="required" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-5 text-dark">
                                                    <label class="form-label pb-3" for="loan_purpose">
                                                        Loan Purpose
                                                    </label>
                                                    <textarea name="loan_purpose" id="js-ckeditor5-classic" cols="30" rows="10"></textarea>
                                                    <!-- <input type="text" id=""> -->
                                                    <!-- <div id="countWord" class="text-right text-dark"></div> -->
                                                </div>

                                            </div>

                                            <div class="pt-3 pb-4 text-center">
                                                <button type="submit" class="btn btn-lg btn-outline-primary">
                                                    Apply for Loan
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

<script src="./assets/js/dashmix.app.min.js"></script>
<script src="./assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>

<!-- Page JS Helpers (CKEditor 5 plugin) -->
<script>
    Dashmix.helpersOnLoad(['js-ckeditor5']);
</script>

<script src="./assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>


<!-- Page JS Code -->
<script src="./assets/js/pages/be_tables_datatables.min.js"></script>
<?php include 'footer.php'; ?>