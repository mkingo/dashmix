<link rel="stylesheet" id="css-main" href="./assets/css/dashmix.min.css">
<?php include 'header.php'; ?>


<div class="main-container">

    <!-- Hero -->

    <!-- <div class="bg-body-light mt-5">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Salary Information</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Salary</li>

                        <li class="breadcrumb-item active" aria-current="page">Appraisal Request</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div> -->


    <!-- END Hero -->






    <div class="content">
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title fw-bold">Request For Appraisal</h3>

            </div>
            <div class="content content-full ms-1">
                <div class="block-content">
                    <form class="js-validation-signin" action="" method="POST">
                        <div class="row">



                            <div class="col-md-8 offset-md-2">
                                <div class="mb-4 text-center">
                                    <label class="form-label my-3" for="leave_application">
                                        <strong> Why do you think you are eligible for an Appraisal?</strong>
                                    </label>
                                    <textarea class="form-control" id="js-ckeditor5-classic" name="example-textarea-input" rows="18" placeholder="Appraisal Application.."></textarea>

                                </div>
                            </div>
                        </div>



                        <div class="pt-3 pb-4 text-center">
                            <button type="submit" class="btn btn-lg btn-outline-primary ">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>








            </div>
        </div>
    </div>
    <div>
<script src="./assets/js/lib/jquery.min.js"></script>
<script src="./assets/js/dashmix.app.min.js"></script>
<script src="./assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>

        <!-- Page JS Helpers (CKEditor 5 plugin) -->
 <script>
    Dashmix.helpersOnLoad(['js-ckeditor5']);
</script>

<?php include 'footer.php'; ?>