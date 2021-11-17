<?php include 'header.php'; ?>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link rel="stylesheet" href="./assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="./assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">

<link rel="stylesheet" id="css-main" href="./assets/css/dashmix.min.css">
<link rel="shortcut icon" href="./assets/media/favicons/favicon.png">
<link rel="icon" type="image/png" sizes="100x100" href="./assets/media/favicons/favicon-192x192.png">
<link rel="apple-touch-icon" sizes="100x100" href="./assets/media/favicons/apple-touch-icon-180x180.png">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.css">

<style>
  .fade {
    background-color: rgba(0, 0, 0, 0.3) !important;


  }
</style>
<main id="main-container">



  <!-- Page Content -->
  <div class="content">
    <!-- <div class="block block-rounded text-center">
            <div class="block-content"> -->
    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
      <!-- <div class="block-header block-header-default">
        <h3 class="block-title">Dynamic Table <small>Export Buttons</small></h3>
      </div> -->
      <div class="block-header">
        <h3 class="block-title fw-bold">My Documents</h3>
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <!-- <a href="./request-for-leave.php" type="submit" class="btn btn-outline-light"> <i class="fa fa-plus me-2"></i>New Leave Request</a> -->
          <button type="button" class="btn btn-outline-light btn-primary" data-bs-toggle="modal" data-bs-target="#modal-block-popout"><i class="fa fa-plus me-2"></i>Add New Document </a></button>
        </div>
      </div>
      <!-- Pop Out Block Modal -->
      <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
          <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
              <div class="block-header bg-primary-dark">
                <h3 class="block-title">Add New Document</h3>
                <div class="block-options">
                  <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="block-content">
                <form class="js-validation-signin" action="" method="POST">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="mb-4">
                        <label class="form-label" for="leave_purpose">
                          Name of Document:
                        </label>
                        <input class="form-control" type="text" name="document_name" required="required" />
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <p class="text-muted">
                      Attach or Drop your Document Image
                    </p>

                    <div class="col-md-6 offset-md-3">

                      <div class="dropzone" id="myDropzone"></div>
                    </div>
                    <!-- </form> -->
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
      <div class="block-content block-content-full">
        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 5%;">#</th>
              <th class="text-center" style="width: 15%;">Name of the Document</th>
              <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Updated On</th>
              <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Document</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">1</td>
              <td class="text-center">

                <em class="text-muted">Jose Mills</em>
              </td>
              <td class="text-center">
                <em class="text-muted">8 days ago</em>
              </td>

              <td class="d-md-table-cell">
                <div class="col-md-6 col-lg- col-xl-6 animated fadeIn offset-md-3">
                  <div class="options-container fx-item-zoom-in fx-overlay-zoom-out w-full">
                    <img class="img-fluid options-item" src="./assets/media/photos/aadhar.jpeg" alt="">
                    <div class="options-overlay bg-black-75">
                      <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-1">546454648918</h3>
                        <h4 class="h6 text-white-75 mb-3">Aadhar Card</h4>
                        <!-- <a class="btn btn-sm btn-primary img-lightbox" href="./assets/media/photos/aadhar.jpeg">
                          <i class="fa fa-search-plus opacity-50 me-1"></i> View
                        </a> -->
                        <button type="button" class="btn btn-sm btn-primary img-lightbox" data-bs-toggle="modal" data-bs-target="#modal-block-popin"><i class="fa fa-search-plus opacity-50 me-1"></i> View</a></button>
                        <a class="btn btn-sm btn-danger" onclick="return deleteItem();">
                          <i class="si si-close opacity-50 me-1"></i> Delete
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>


          </tbody>
        </table>
      </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    <!-- </div>
          </div> -->
  </div>
  <!-- END Page Content -->
   <!-- Pop Out Block Modal -->
   <div class="modal fade" id="modal-block-popin" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-popin" role="document">
                <div class="modal-content">
                    <div class="block block-rounded block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Document Name</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                        <div class="modal-body">
                         <img src="./assets/media/photos/aadhar.jpeg" style="width:100%;height:100%;">       
            </div>
                        </div>
                        <div class="block-content block-content-full text-end bg-body">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                        
                                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Pop Out Block Modal -->
</main>
<script>
  Dropzone.options.myDropzone = {
    url: 'my-documents.php',
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

      //send all the form data along with the files<div class="col-lg-8 push">


      this.on("sendingmultiple", function(data, xhr, formData) {
        formData.append("firstname", jQuery("#firstname").val());
        formData.append("lastname", jQuery("#lastname").val());
      });
    }
  }
</script>
<script>
  function deleteItem() {
    return alert("You are sure you want to delete this document");
  }
</script>


<?php include 'footer.php'; ?>

<script src="./assets/js/dashmix.app.min.js"></script>

<!-- jQuery (required for DataTables plugin) -->
<script src="./assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="./assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_tables_datatables.min.js"></script>