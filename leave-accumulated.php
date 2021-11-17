<?php include 'header.php'; ?>

<div class="main-container">
    <!-- Hero -->

    <div class="bg-body-light mt-6">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Leave Information</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Leave</li>

                        <li class="breadcrumb-item active" aria-current="page">Leave Accumulated</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- END Hero -->

    <div class="content pt-0">
        <div class="block block-themed">
            <div class="block-header">
                <h3 class="block-title fw-bold">Accumulated Leaves</h3>

            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <h4 class="fw-light">Accumulated Leaves Details:</h4>
                    <table class="table table-striped table-bordered table-hover table-vcenter text-center">
                        <thead>
                            <tr>
                                <th style="width: 50px;">#</th>
                                <th class="text-left">Leave Name</th>
                                <th class="text-left">Accumulated</th>
                                <th class="text-left">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-left">Casual Leave</td>
                                <td class="text-left">0.50</td>
                                <td class="text-left">
                                    Oct 14, 2021
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-left">Sick Leave</td>
                                <td class="text-left">0.50</td>
                                <td class="text-left">
                                    Oct 14, 2021
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-left">Paid Leave</td>
                                <td class="text-left">0.50</td>
                                <td class="text-left">
                                    Oct 14, 2021
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top-0">
                            <tr>
                                <td colspan="4" class="text-end">
                                    <button type="button" class="btn btn-sm font-weight-bolder btn-primary" id="leave_record_show_more" data-id="7" data-user="1" data-total="3">Show More</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>



<?php include 'footer.php'; ?>
<script src="./assets/js/dashmix.app.min.js"></script>