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
                <h3 class="block-title fw-bold">Bank Details</h3>
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <!-- <a href="./edit-bank-details.php" type="submit" class="btn btn-outline-light"><i class="fa fa-plus me-2"></i>Edit Bank Details</a> -->
                    <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-fadein"><i class="fa fa-plus me-2"></i>Edit Bank Details</button>
                </div>
            </div>
            <div class="content content-full ms-1">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="fa-ul list-icons">
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-user-shield"></i>
                                </span>
                                <div class="fw-semibold">Account Holder Name</div>
                                <div class="text-muted">dhaval sudra</div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-digital-tachograph"></i>
                                </span>
                                <div class="fw-semibold">Account Number</div>
                                <div class="text-muted">789789789789</div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-user-cog"></i>
                                </span>
                                <div class="fw-semibold">Account Type</div>
                                <div class="text-muted">current</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="fa-ul list-icons">
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-coins"></i>
                                </span>
                                <div class="fw-semibold">Bank Name</div>
                                <div class="text-muted">Rama Walls</div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-barcode"></i>
                                </span>
                                <div class="fw-semibold">IFSC Code</div>
                                <div class="text-muted">Deserunt incidunt r</div>
                            </li>
                            <li>
                                <span class="fa-li text-primary">
                                    <i class="fa fa-archway"></i>
                                </span>
                                <div class="fw-semibold">Branch Name</div>
                                <div class="text-muted">Silas Vazquez</div>
                            </li>
                        </ul>
                    </div>
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
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="account_holder_name">
                                                Account Holder Name
                                            </label>
                                            <input class="form-control" type="text" name="account_holder_name" value="dhaval sudra" required="required" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="bank_name">
                                                Bank Name
                                            </label>
                                            <input class="form-control" type="text" name="bank_name" value="Rama Walls" required="required" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="account_type">
                                                Type of the Bank Account
                                            </label>
                                            <select class="form-control form-select" name="account_type" required="required">
                                                <option disabled="">-- Select an Options --</option>
                                                <option value="savings">Savings </option>
                                                <option value="current" selected="">Current </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label class="form-label" for="account_number">
                                                Account Holder Number
                                            </label>
                                            <input class="form-control" type="text" name="account_number" value="789789789" minlength="9" required="required" maxlength="12" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="ifsc_code">
                                                IFSC Details
                                            </label>
                                            <input class="form-control" type="text" name="ifsc_code" value="Deserunt incidunt r" required="required" />
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" for="branch_name">
                                                Respective Branch Name
                                            </label>
                                            <input class="form-control" type="text" name="branch_name" value="Silas Vazquez" required="required" />
                                        </div>
                                    </div>
                                </div>

                                <div class="pt-3 pb-4 text-center">
                                    <button type="submit" class="btn btn-lg btn-outline-primary">Update Bank Details</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Fade In Block Modal -->
        
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<!-- Page JS Plugins -->
<?php include 'footer.php'; ?>
<script src="./assets/js/dashmix.app.min.js"></script>