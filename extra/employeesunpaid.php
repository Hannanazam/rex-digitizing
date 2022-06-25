<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Employees Unpaid</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="employees.php">Employees</a></li>
                  <li class="breadcrumb-item"><a href="#">Payments</a></li>
                  <li class="breadcrumb-item active">Employees Unpaid</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="card">
  <div class="card-body">
      <div class="d-flex">
          <h5 class="card-title">UNPAID EMPLOYEES</h5>
      </div>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Invoice Generate Date</th>
                    <th>Unpaid Amount</th>
                    <th>Invoices</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success label-rounded">Digitizer</span></td>
                    <td>Mar 16, 2021</td>
                    <td>$45.00</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                    <td>
                      <button href="employeespaidlogs.php" class="btn btn-danger btn-sm">Mark as Paid</button>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Muhammad Arbab</td>
                    <td><span class="label label-success label-rounded">Vector Artist</span></td>
                    <td>Mar 16, 2021</td>
                    <td>$55.00</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                    <td>
                      <button href="employeespaidlogs.php" class="btn btn-danger btn-sm">Mark as Paid</button>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Muhammad Danial</td>
                    <td><span class="label label-success label-rounded">Digitizer</span></td>
                    <td>Mar 16, 2021</td>
                    <td>$45.00</td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                    <td>
                      <button href="employeespaidlogs.php" class="btn btn-danger btn-sm">Mark as Paid</button>
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
