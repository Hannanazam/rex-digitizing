<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Designer Invoices</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Invoices</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="row m-t-40">
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">100</h1>
                <h6 class="text-white">Total Invoices</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Paid Invoices</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Unpaid Invoices</h6>
            </div>
        </div>
    </div>
</div>

       <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                    
                    <div class="row justify-content-between">
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <h4 class="card-title">Invoices</h4>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Status</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-75" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="Pending">All</option>
                                <option value="Completed">Paid</option>
                                <option value="Delivered">Unpaid</option>
                              </select>
                            </div>
                          </div>
                       </div>
                    </div>

                        <div class="table-responsive m-t-20 no-wrap">
                            <table class="table table-hover text-center" id="myTable">
                                <thead>
                                    <tr>
                                      <th>S.No</th>
                                      <th>Invoice No</th>
                                      <th>Amount</th>
                                      <th>Invoice Date</th>
                                      <th>Status</th>
                                      <th>Invoices</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>01</td>
                                      <td>INV-00578</td>
                                      <td>$45.00</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Mar 16, 2021</span> </td>
                                      <td><span class="label label-success">Paid</span></td>
                                      <td>
                                        <a href="javascript void(0)" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>02</td>
                                      <td>INV-00578</td>
                                      <td>$475.00</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Apr 28, 2021</span> </td>
                                      <td><span class="label label-danger">Unpaid</span></td>
                                      <td>
                                        <a href="javascript void(0)" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
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

<?php include 'footer.php'; ?>
