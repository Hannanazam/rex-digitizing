<?php include 'header2.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Users</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Unpaid Invoices</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

       <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h5 class="card-title">UNPAID INVOICES</h5>
                        </div>
                        <div class="table-responsive m-t-20 no-wrap">
                            <table class="table vm no-th-brd pro-of-month">
                                <thead>
                                    <tr>
                                      <th>S.No</th>
                                      <th>Invoice No</th>
                                      <th>Invoice Generate Date</th>
                                      <th>Amount</th>
                                      <th>Invoices</th>
                                      <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>01</td>
                                      <td>INV-00578</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Mar 16, 2021</span> </td>
                                      <td>$45.00</td>
                                      <td>
                                        <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                                      </td>
                                      <td><button type="button" class="btn btn-danger btn-xs">Make Payments</button></td>
                                    </tr>
                                    <tr>
                                      <td>01</td>
                                      <td>INV-00578</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2021</span> </td>
                                      <td>$475.00</td>
                                      <td>
                                        <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                                      </td>
                                      <td><button type="button" class="btn btn-danger btn-xs">Make Payments</button></td>
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

<?php include 'footer.php'; ?>
