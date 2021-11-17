<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<?php
include './header.php';
?>
<div class="main-container">








    <div class="content mt-6">
        <div class="block block-rounded">
            <div class="block-header block-rounded">
                <h3 class="block-title fw-bold">Request For Reimburstment</h3>
            </div>

            <div class="block-content block-content-full ms-1">
                <form class="js-validation-signin" action="" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-5 mb-5">
                            <label class="form-label" for="example-flatpickr-custom">Amount</label>
                            <input class="form-control form-control" type="number" name="loan_amount" placeholder="10000" required="required" />
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label" for="leave_purpose">
                                    Used For:
                                </label>
                                <input class="form-control" type="text" name="leave_purpose" required="required" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <p class="text-muted">
                            Attach or Drop Invoices/Bills
                        </p>

                        <div class="col-md-5">

                            <div class="dropzone" id="myDropzone"></div>
                        </div>
                        <!-- </form> -->
                    </div>
            </div>

            <div class="px-4 py-4 text-left ">
                <button type="submit" class="btn btn-lg btn-outline-primary">
                    Submit
                </button>
            </div>
            
            </form>
        </div>








    </div>
</div>

<?php

include './footer.php';
?>
<script src="./assets/js/dashmix.app.min.js"></script>
<script>
    Dropzone.options.myDropzone = {
        url: 'salary-reimburstment.php',
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 5,
        maxFiles: 5,
        maxFilesize: 1,
        acceptedFiles: 'image/*',
        addRemoveLinks: true,
        init: function() {
            dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

            // for Dropzone to process the queue (instead of default form behavior):
            // document.getElementById("submit-all").addEventListener("click", function(e) {
            //     // Make sure that the form isn't actually being sent.
            //     e.preventDefault();
            //     e.stopPropagation();
            //     dzClosure.processQueue();
            // });

            //send all the form data along with the files:
            this.on("sendingmultiple", function(data, xhr, formData) {
                formData.append("firstname", jQuery("#firstname").val());
                formData.append("lastname", jQuery("#lastname").val());
            });
        }
    }
</script>

<script>
    Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);
</script>