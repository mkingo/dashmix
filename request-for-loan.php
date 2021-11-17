<?php include 'header.php';?>

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
                <h3 class="block-title fw-bold">Apply for Loan</h3>
            </div>
            <div class="block-content">
                <form class="" action="" method="">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label class="form-label" for="loan_amount">
                                    Amount Required as a Loan
                                </label>
                                <input class="form-control form-control" type="number" name="loan_amount" placeholder="10000" required="required" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label class="form-label" for="loan_purpose">
                                    Loan Purpose
                                </label>
                                <textarea class="form-control" name="loan_purpose" placeholder="Reason for which you are Applying for this Loan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 pb-4">
                        <button type="submit" class="btn btn-lg btn-outline-primary">
                            Apply for Loan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include 'footer.php';?>
