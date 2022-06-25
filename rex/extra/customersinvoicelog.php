<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Customers Invoice Logs</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                  <li class="breadcrumb-item"><a href="#">Payments</a></li>
                  <li class="breadcrumb-item active">Customers Unpaid Invoices</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="card">
  <div class="card-body">
      <div class="d-flex">
          <h5 class="card-title">CUSTOMERS</h5>
      </div>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Company</th>
                    <th>Invoices</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>Muhammad Farhan</td>
                    <td>Nexus Digitizing</td>
                    <td>
                      <a href="customersinvoicelogid.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Logs"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Muhammad Arbab</td>
                    <td>Boston Digitizing</td>
                    <td>
                      <a href="customersinvoicelogid.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Logs"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Muhammad Danial</td>
                    <td>Fd Digital Solutions</td>
                    <td>
                      <a href="customersinvoicelogid.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Logs"><i class="fa fa-search" aria-hidden="true"></i></a>
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
