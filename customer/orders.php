<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Orders</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Orders</a></li>
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
                <h6 class="text-white">Total Orders</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Digitizing Orders</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Vector Orders</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">

  <div class="row justify-content-between">
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <h4 class="card-title">Orders</h4>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Category</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-75" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="Pending">All</option>
                                <option value="Completed">Vector</option>
                                <option value="Delivered">Digitizing</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Status</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-75" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="Pending">All</option>
                                <option value="Pending">Pending</option>
                                <option value="In-Process">In Process</option>
                                <option value="In-Process">Completed</option>
                                <option value="In-Process">Delivered</option>
                                <option value="In-Process">Rejected</option>
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
                    <th>Order No</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-primary">Not Defined</span></td>
                    <td><span class="label label-success ">Pending</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded Files</a>
                    </td>
                    <td>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>ORD-002</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-primary">Not Defined</span></td>
                    <td><span class="label label-success ">In Process</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded Files</a>
                    </td>
                    <td>
                     <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>ORD-003</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><span class="label label-primary">Not Defined</span></td>
                    <td><span class="label label-success ">Completed</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded Files</a>
                    </td>
                    <td>
                     <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                     </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>ORD-003</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td>$10.00</td>
                    <td><span class="label label-success ">Delivered</span></td>
                    <td>
                      <a href="" class="btn btn-primary btn-xs">Received Files</a>
                      <a href="" class="btn btn-danger btn-xs">Uploaded Files</a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>ORD-003</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td>$10.00</td>
                    <td><span class="label label-success ">Rehjected</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded Files</a>
                    </td>
                    <td>
                     <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
