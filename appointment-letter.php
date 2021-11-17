<?php include 'header.php';?>


<main id="main-container">

        <!-- Hero -->
        <!-- <div class="bg-body-light d-print-none">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Invoice</h1>
               <button type="button" class="btn btn-alt-primary my-2">
                <i class="fa fa-fw fa-plus me-1"></i> New Invoice
              </button> 
            </div>
          </div>
        </div> -->
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
          <!-- Invoice -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <!-- <h3 class="block-title">#INV01364</h3> -->
              <div class="block-options">
                <!-- Print Page functionality is initialized dmPrint() -->
                <button type="button" class="btn-block-option" onclick="Dashmix.helpers('dm-print');">
                  <i class="si si-printer me-1"></i> Print Invoice
                </button>
              </div>
            </div>
            <div class="block-content pt-0">
              <div class="p-sm-4 p-xl-7">
              <h2 class="offset-md-4 pb-6">Vardaam Web Solutions</h2>
                <!-- Invoice Info -->
                <div class="row mb-5">
                  <!-- Company Info -->
                  <div class="col-6 mb-4">
                    
                    <address>
                        <strong>Date:</strong>  18th May 2021<br><br>
                      <strong>Subject:</strong>  Appointment Letter<br><br>
                      <strong>To ,</strong> <br>
                      Lorem ipsum dolor sit <br>
                      ltd@example.com<br>
                      Vadodara, Gujarat
                    </address>
                  </div>
                  <!-- END Company Info -->
                    
                  <!-- Employee Info -->
                  <!-- <div class="col-6 text-end">
                    <p class="h3">Employee</p>
                    <address>
                      Street Address<br>
                      State, City<br>
                      Region, Postal Code<br>
                      ctr@example.com
                    </address>
                  </div> -->
                  <!-- END Client Info -->
                  <p>
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni reprehenderit dolorem eius optio ab unde, delectus rem non amet nesciunt a laudantium totam reiciendis ex inventore molestias recusandae. Harum, magni!
                  </p>
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, cumque eos nisi eum eius corrupti? Voluptas, suscipit. At pariatur magnam assumenda molestias explicabo minus tempore voluptas excepturi, harum aut dolore velit, voluptatum, libero rem animi laboriosam doloribus maxime dolores a.
                  </p>
                  <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae optio id adipisci atque sed reprehenderit odio consequuntur dolores sint accusamus, velit iste dolor veritatis placeat aliquid, repellendus nihil. Molestiae iure deserunt, iusto harum facilis, voluptatibus quis autem magni corrupti eius quos praesentium qui culpa unde sed asperiores atque tempore alias!
                  </p>

                  <p class="mb-1">
                     <strong>Yours Sincerely,</strong><br><br>
                     <strong>Vardaam Web Solutions Ltd.</strong> 
                  </p>

                  <p class="pl-2 pt-2">   
                      <img src="download.png" alt="signature" height="100px" height="100px">
                      <h5>Chetan Chitte</h5>
                      <h6>Director</h6>
                  </p>
                </div>
                <!-- END Invoice Info -->

                <!-- Table -->
                <!-- <div class="table-responsive push">
                  <table class="table table-bordered">
                    <thead class="bg-body">
                      <tr>
                        <th class="text-center" style="width: 60px;"></th>
                        <th>Product</th>
                        <th class="text-center" style="width: 90px;">Qnt</th>
                        <th class="text-end" style="width: 120px;">Unit</th>
                        <th class="text-end" style="width: 120px;">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td>
                          <p class="fw-semibold mb-1">Gross Salary</p>
                          <div class="text-muted">Logo and business cards design</div>
                        </td>
                        <td class="text-center">
                          <span class="badge rounded-pill bg-primary">1</span>
                        </td>
                        <td class="text-end">$1.800,00</td>
                        <td class="text-end">$1.800,00</td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td>
                          <p class="fw-semibold mb-1">House Rent &amp; Allowance</p>
                          <div class="text-muted">Design/Development for all popular modern browsers</div>
                        </td>
                        <td class="text-center">
                          <span class="badge rounded-pill bg-primary">1</span>
                        </td>
                        <td class="text-end">$20.000,00</td>
                        <td class="text-end">$20.000,00</td>
                      </tr>
                      <tr>
                        <td class="text-center">3</td>
                        <td>
                          <p class="fw-semibold mb-1">Retention Bonus</p>
                          <div class="text-muted">Promotional mobile application</div>
                        </td>
                        <td class="text-center">
                          <span class="badge rounded-pill bg-primary">1</span>
                        </td>
                        <td class="text-end">$3.200,00</td>
                        <td class="text-end">$3.200,00</td>
                      </tr>
                      <tr>
                        <td colspan="4" class="fw-semibold text-end">Subtotal</td>
                        <td class="text-end">$25.000,00</td>
                      </tr>
                      <tr>
                        <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                        <td class="text-end">20%</td>
                      </tr>
                      <tr>
                        <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                        <td class="text-end">$5.000,00</td>
                      </tr>
                      <tr>
                        <td colspan="4" class="fw-bold text-uppercase text-end bg-body-light">Total Due</td>
                        <td class="fw-bold text-end bg-body-light">$30.000,00</td>
                      </tr>
                    </tbody>
                  </table>
                </div> -->
                <!-- END Table -->

                <!-- Footer -->
                <p class="text-muted text-center my-5">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea ut reiciendis modi nesciunt deleniti perferendis iusto officia recusandae eos aperiam.
                </p>
                <!-- END Footer -->
              </div>
            </div>
          </div>
          <!-- END Invoice -->
        </div>
        <!-- END Page Content -->
      </main>


<?php include 'footer.php';?>
<script src="./assets/js/dashmix.app.min.js"></script>