<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">




<!-- Main Container -->
<main id="main-container">
   
    <!-- Page Content -->
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title fw-bold">Pay Slips</h3>
            </div>
            <!-- <div class="block-content block-content-full">
                <div class="table-responsive">
                    <div id="salaryHistoryList_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="salaryHistoryList_length">
                                    <label>
                                        <select name="salaryHistoryList_length" aria-controls="salaryHistoryList" class="form-select">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter dataTable no-footer" id="salaryHistoryList" aria-describedby="salaryHistoryList_info">
                                    <thead>
                                        <tr>
                                            <th class="text-center sorting_disabled sorting_asc" rowspan="1" colspan="1" aria-label="#">#</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Salary Month: activate to sort column ascending">Salary Month</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Gross Salary: activate to sort column ascending">Gross Salary</th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Salary Payable: activate to sort column ascending">Salary Payable</th>
                                            <th scope="col" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td class="text-center sorting_1">1</td>
                                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                                            <td>₹&nbsp;7,000.00</td>
                                            <td>₹&nbsp;6,920.00</td>
                                            <td class="text-center">
                                                <a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="text-center sorting_1">2</td>
                                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/4/download" class="fw-medium">June - 2021</a></td>
                                            <td>₹&nbsp;15,000.00</td>
                                            <td>₹&nbsp;17,400.00</td>
                                            <td class="text-center">
                                                <a href="https://hrassist.brandwm.com/profiles/payroll/4/download" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="salaryHistoryList_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <!-- <tr>
                            <th class="text-center" style="width: 2%;">#</th>
                            <th style="width: 10%;">Type Of Leave</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">From</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">To</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Access</th>
                            <th style="width: 15%;">Purpose</th>

                        </tr> -->
                        <tr>
                            <th class="text-center sorting_disabled sorting_asc" rowspan="1" colspan="1" aria-label="#">#</th>
                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Salary Month: activate to sort column ascending">Salary Month</th>
                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Gross Salary: activate to sort column ascending">Gross Salary</th>
                            <th scope="col" class="sorting" tabindex="0" aria-controls="salaryHistoryList" rowspan="1" colspan="1" aria-label="Salary Payable: activate to sort column ascending">Salary Payable</th>
                            <th scope="col" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-center sorting_1">1</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center sorting_1">2</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center sorting_1">3</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center sorting_1">4</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center sorting_1">5</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">April - 2011</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-center sorting_1">6</td>
                            <td><a href="https://hrassist.brandwm.com/profiles/payroll/2/download" class="fw-medium">May - 2012</a></td>
                            <td>₹&nbsp;7,000.00</td>
                            <td>₹&nbsp;6,920.00</td>
                            <td class="text-center">
                                <a href="salary-slip.php" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php include 'footer.php'; ?>

<!-- jQuery (required for DataTables plugin) -->
<script src="./assets/js/dashmix.app.min.js"></script>
<script src="./assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<!-- <script src="./assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
<script src="./assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script> -->

<!-- Page JS Code -->
<script src="./assets/js/pages/be_tables_datatables.min.js"></script>

