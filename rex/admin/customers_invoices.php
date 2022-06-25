<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Invoices</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Invoices</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="card">
         <div class="card-body">
           <h4 class="card-title">SELECT CUSTOMER</h4>
           <h6 class="card-subtitle">Select the customer for you want to place the order</h6>
           <form method="post" class="row" action="">

                <div class="form-group col-md-6">
                    <label>Select Customer</label>
                    <select class="select2 form-control">
                      <option value="" disabled="" selected="">Select Customer</option>
                      <option>Muhammad Farhan</option>
                      <option>Muhammad Danial</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="contact" class="form-control" value="mohdfarhan018" disabled="">
                </div>

                <div class="form-group col-md-6">
                    <label>Country</label>
                    <input type="text" name="contact" class="form-control" value="Australia" disabled="">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" name="contact" class="form-control" value="mohdfarhan018@gmail.com" disabled="">
                </div>

                <div class="form-group col-md-12 text-right">
                      <button type="submit" class="btn btn-primary">Search </button>
                  </div>

              </form>
         </div>
       </div>

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
                <h6 class="text-white">Paid</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Unpaid</h6>
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
                       <div class="col-lg-6 col-md-6 col-sm-12">
                        <h4 class="card-title">Invoices</h4>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-6 m-auto">Select Status:</label>
                            <div class="col-md-6">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All</option>
                                <option value="Pending">Paid</option>
                                <option value="In-Process">Unpaid</option>
                              </select>
                            </div>
                          </div>
                       </div>
                   </div>

                        <div class="table-responsive m-t-20 no-wrap">
                            <table class="table vm no-th-brd pro-of-month">
                                <thead>
                                    <tr>
                                      <th>S.No</th>
                                      <th>Invoice No</th>
                                      <th>Invoice To</th>
                                      <th>Amount</th>
                                      <th>Invoice Generate Date</th>
                                      <th>Invoice Paid Date</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>INV-00578</td>
                                      <td>Muhammad Farhan</td>
                                      <td>$45.00</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Mar 16, 2021</span> </td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Mar 16, 2021</span> </td>
                                        <td><span class="label label-success">Paid</span></td>
                                      <td>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>INV-00578</td>
                                      <td>Muhammad Farhan</td>
                                      <td>$45.00</td>
                                      <td><span class="text-muted"><i class="fa fa-clock-o"></i> Mar 16, 2021</span> </td>
                                      <td><span class="text-muted">-</span> </td>
                                      <td><span class="label label-danger">Unpaid</span></td>
                                      <td>
                                      <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Invoice"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-original-title="Download Invoice"><i class="fa fa-download" aria-hidden="true"></i></button>
                                        <a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#markaspaid" data-original-title="Mark as Paid"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#degenerate" data-original-title="Degenerate"><i class="fa fa-undo" aria-hidden="true"></i></button>
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
