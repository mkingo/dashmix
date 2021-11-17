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
                <h3 class="block-title fw-bold">Edit Bank Details</h3>
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
                                <input class="form-control" type="text" name="account_number" value="789789789" minlength="9" required="required"  maxlength="12"/>
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

                    <div class="pt-3 pb-4">
                        <button type="submit" class="btn btn-lg btn-outline-primary">Update Bank Details</button>
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
