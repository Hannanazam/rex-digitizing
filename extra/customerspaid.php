<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Customers Paid</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                  <li class="breadcrumb-item"><a href="#">Payments</a></li>
                  <li class="breadcrumb-item active">Customers Paid</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="card">
  <div class="card-body">
      <div class="d-flex">
          <h5 class="card-title">PAID CUSTOMERS</h5>
      </div>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Invoice No</th>
                    <th>Customer Name</th>
                    <th>Company</th>
                    <th>Invoice Generate Date</th>
                    <th>Amount</th>
                    <th>Paid Date</th>
                    <th>Invoice</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>INV-00578</td>
                    <td>Muhammad Farhan</td>
                    <td>Nexus Digitizing</td>
                    <td>Mar 01, 2021</td>
                    <td>$45.00</td>
                    <td>Mar 16, 2021</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>INV-00578</td>
                    <td>Muhammad Arbab</td>
                    <td>Nexus Digitizing</td>
                    <td>Mar 01, 2021</td>
                    <td>$45.00</td>
                    <td>Mar 16, 2021</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>INV-00578</td>
                    <td>Muhammad Danial</td>
                    <td>Nexus Digitizing</td>
                    <td>Mar 01, 2021</td>
                    <td>$45.00</td>
                    <td>Mar 16, 2021</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
