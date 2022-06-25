<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Invoice Logs</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="employees.php">Customers</a></li>
                  <li class="breadcrumb-item"><a href="#">Payments</a></li>
                  <li class="breadcrumb-item"><a href="employeespaid.php">Invoice Logs</a></li>
                  <li class="breadcrumb-item active"> All Logs</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="card">
  <div class="card-body">

        <h4 class="card-title">MUHAMMAD FARHAN</h4>
        <h6 class="card-subtitle">mohdfarhan014@gmail.com</h6>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Invoice No</th>
                    <th>Invoice Generate Date</th>
                    <th>Amount</th>
                    <th>Paid Date</th>
                    <th>Status</th>
                    <th>Invoice</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>INV-00578</td>
                    <td>Mar 01, 2021</td>
                    <td>$45.00</td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-success label-rounded">Paid</span></td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>INV-00579</td>
                    <td>Mar 01, 2021</td>
                    <td>$25.00</td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-danger label-rounded">Unpaid</span></td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>INV-00865</td>
                    <td>Mar 01, 2021</td>
                    <td>$55.00</td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-success label-rounded">Paid</span></td>
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
