<?php include 'header.php'; ?>

<style>
  .table-responsive .card-title{
    text-transform: uppercase;
  }
  .card_order{
    min-width: 19%;
    cursor: pointer;
  }
</style>

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

<div class="d-flex justify-content-between">
                <div class="card card_order" data-id="allorder">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">12</h1>
                        <h6 class="text-white">All Order</h6>
                    </div>
                </div>
                <div class="card card_order" data-id="Pending">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">12</h1>
                        <h6 class="text-white">Pending</h6>
                    </div>
                </div>
                <div class="card card_order" data-id="in-process">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">12</h1>
                        <h6 class="text-white">In process</h6>
                    </div>
                </div>
                <div class="card card_order" data-id="Complete">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">12</h1>
                        <h6 class="text-white">Complete</h6>
                    </div>
                </div>
                <div class="card card_order" data-id="Rejected">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">12</h1>
                        <h6 class="text-white">Rejected</h6>
                    </div>
                </div>
</div>

<div class="row m-t-40">
    <!-- Column -->
    <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">10000</h1>
                <h6 class="text-white">Total Orders</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80000</h1>
                <h6 class="text-white">Pending</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20000</h1>
                <h6 class="text-white">In Process</h6>
            </div>
        </div>
    </div>
        <!-- Column -->
        <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">10000</h1>
                <h6 class="text-white">Completed</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80000</h1>
                <h6 class="text-white">Delivered</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-2 col-lg-2 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Rejected</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">

      <div class="table-responsive no-wrap" id="allorder">
      <div class="row justify-content-between">
                       <div class="col-lg-2 col-md-4 col-sm-12">
                        <h4 class="card-title">All Orders</h4>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Sort By</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Order</option>
                                <option value="Pending">Pending</option>
                                <option value="In-Process">In-Process</option>
                                <option value="Completed">Completed</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Rejected">Rejected</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-5 m-auto">Category</label>
                            <div class="col-md-7">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Order</option>
                                <option value="Pending">Digitizing</option>
                                <option value="In-Process">Vector</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group d-flex mb-0">
                                <label for="" class="w-50 m-auto">Select Date</label>
                                 <input type="text" name="date" value="" class="form-control ml-2" id="daterange" required>
                                <br>
                        </div>
                       </div>
        </div>
          <table class="table table-hover text-center" id="myTable">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Rush</th>
                    <th>Assign</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td>Ahmed Ali</td>
                    <td><span class="label label-success">Pending</span></td>
                    <td>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#customerattachments">Customer</button>
                      <a href="" data-toggle="modal" data-target="#customerattachments" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                
                    <td>
                      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="order_add_digitizing.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#cancel" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#deliver" title="Deliver Order"><i class="fa fa-check" aria-hidden="true"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#assignMoal">Assign</button></td>
                    <td><span class="label label-success">Pending</span></td>
                    <td>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#customerattachments">Customer</button>
                      <a href="" data-toggle="modal" data-target="#customerattachments" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="order_add_digitizing.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#cancel" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
                  
              </tbody>
          </table>
      </div>
      <div class="table-responsive no-wrap" id="Pending">
         <div class="d-flex">
          <h5 class="card-title">Pending ORDERS</h5>
      </div>
          <table class="table table-hover text-center" id="myTable1">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Rush</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td><span class="label label-success ">Pending</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Customer</a>
                      <a href="" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="table-responsive no-wrap" id="in-process">
         <div class="d-flex">
          <h5 class="card-title">In-Process ORDERS</h5>
      </div>
          <table class="table table-hover text-center" id="myTable2">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Rush</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td><span class="label label-success ">Pending</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Customer</a>
                      <a href="" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="table-responsive no-wrap" id="Complete">
         <div class="d-flex">
          <h5 class="card-title">Complete ORDERS</h5>
      </div>
          <table class="table table-hover text-center" id="myTable3">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Rush</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td><span class="label label-success ">Pending</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Customer</a>
                      <a href="" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
      <div class="table-responsive no-wrap" id="Rejected">
         <div class="d-flex">
          <h5 class="card-title">Rejected ORDERS</h5>
      </div>
          <table class="table table-hover text-center" id="myTable4">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Rush</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Muhammad Farhan</td>
                    <td><span class="label label-success ">Digitizing</span></td>
                    <td>Mar 16, 2021</td>
                    <td><i class="fa fa-times" style="color:red"></i></td>
                    <td><span class="label label-success ">Pending</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Customer</a>
                      <a href="" class="btn btn-primary btn-xs">Designer</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-original-title="View Order"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" data-original-title="Edit Order"><i class="fa fa-edit" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Cancel Order"><i class="fa fa-times" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete Order"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<div class="modal fade" id="orderDetail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Order Details</h4> <button type="button" class="close" data-dismiss="modal">×</button>
            </div> <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                <div class="card">
                <div class="card-body">
                  <!-- Nav tabs -->
                  <div class="vtabs">
                    <ul class="nav nav-tabs tabs-vertical" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home4" role="tab" aria-selected="true"><span class="hidden-sm-up"><i class="ti-home"></i></span>
                          <span class="hidden-xs-down">Customer's Details</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-user"></i></span>
                          <span class="hidden-xs-down">Order Details</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages4" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-email"></i></span>
                          <span class="hidden-xs-down">Order Requirements</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages5" role="tab" aria-selected="false"><span class="hidden-sm-up"><i class="ti-email"></i></span>
                          <span class="hidden-xs-down">Designers</span></a>
                      </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active p-20" id="home4" role="tabpanel">
                      <div class="row" style="border-bottom: none">
                        <div class="col-md-4">
                            <ul type="none" class="font-weight-normal text-dark">
                            <li>Name:</li>
                            <li>Company:</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <ul type="none" class="font-weight-normal">
                                                                <li>Qadir Salman 02</li>
                                <li>Nexus</li>
                                                            </ul>
                        </div>
                    </div>
                      </div>
                      <div class="tab-pane p-20" id="profile4" role="tabpanel">
                      <div class="row">
                        <div class="col-md-4">
                            <ul type="none" class="font-weight-normal text-dark">
                            <li>Order number:</li>
                            <li>Order Name:</li>
                            <li>Service Category:</li>
                            <li>Date:</li>
                            <li>Rush:</li>
                            <li>Status:</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <ul type="none" class="font-weight-normal">
                            <li> ORD-001</li>
                            <li>new order edited</li>
                            <li>
                                                                   Digitizing
                                                            </li>
                            <li>Jul 15, 2021</li>
                            <li>
                                                                   Yes
                                                            </li>
                            <li>In Process</li>
                            </ul>
                        </div>
                    </div>
                      </div>
                      <div class="tab-pane p-20" id="messages4" role="tabpanel">
                      <div class="row" style="border-bottom: none">
                            <div class="col-md-4">
                                <ul type="none" class="font-weight-normal text-dark">
                                    <li>Format:</li>
                                    <li>Placement:</li>
                                    <li>Height:</li>
                                    <li>Width:</li>
                                    <li>Fabric:</li>
                                    <li>Total No of Colors:</li>
                                    <li>Background Fill:</li>
                                    <li>Additional Information:</li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul type="none" class="font-weight-normal">
                                    <li>ART</li>
                                    <li>Apron</li>
                                    <li>2211</li>
                                    <li>3211</li>
                                    <li>Canvas</li>
                                    <li>4311</li>
                                                                            <li>Yes</li>
                                                                        <li>yjukikyjh111</li>
                                </ul>
                            </div>
                      </div>
                      </div>
                      <div class="tab-pane p-20" id="messages5" role="tabpanel">
                      <div class="row" style="border-bottom: none">
                        <div class="col-md-4">
                            <ul type="none" class="font-weight-normal text-dark">
                            <li>Assigned:</li>
                                                            <li>Assigned To:</li>
                                <li>Assigning Date Time:</li>
                                <li>Delivery Date Time:</li>
                                                        </ul>
                        </div>
                        <div class="col-md-8">
                            <ul type="none" class="font-weight-normal">
                             <li>Yes</li>

                                                                                                                                            <li>Farhan Ahmed</li>
                                                                        <li>Jul 16, 2021 -  08:39 PM</li>
                                    <li>-</li>
                                
                            </ul>
                        </div>
                    </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="deliver" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Deliver Order</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                      <form method="post" class="row" action="{{route('save_assign_orders')}}">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Set Design Amount</label>
                                                <input type="number" name="design_amount" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Set Designer Price</label>
                                                <input type="number" name="designer_amount" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12 text-right">
                                                <button type="submit" class="btn btn-dark">Deliver Order</button>
                                            </div>
                                        </div>
                                         </form>
                                    </div>
                                </div>
                            </div>
                        </div>  


                    
<!-- <div class="card">
                                                <div class="card-body gallery">
                                                    <div class="form-group">
                                                        <label class="form-label">Gallery Images <small style="font-size: 60%">(500x750)</small></label><br>
                                                        <div class="input-images"></div>
                                                    </div>
                                                </div>
                                            </div> -->

<?php include 'footer.php'; ?>
