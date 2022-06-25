<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Customers Invoice Generate</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                  <li class="breadcrumb-item active">Invoice Generate</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

      <div class="card">
           <div class="card-body">
             <h4 class="card-title">Search Customer</h4>

                <form method="post" class="row" action="" enctype="multipart/form-data">

                  <div class="form-group col-md-6">
                      <label>Select Customer</label>
                      <select class="select2 form-control" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                        <option value="" disabled selected>Select Customer</option>
                        <option>Muhammad Farhan</option>
                        <option>Muhammad Danial</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                      <label>Company</label>
                      <input type="text" name="contact" class="form-control" value="Nexus Digitizing" disabled>
                  </div>

                  <div class="form-group col-md-6">
                      <label>Country</label>
                      <input type="text" name="contact" class="form-control" value="Australia" disabled>
                  </div>
                  <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="text" name="contact" class="form-control" value="mohdfarhan018@gmail.com" disabled>
                  </div>

                  <div class="form-group col-md-12 text-right">
                      <button type="submit" class="btn btn-primary">Search </button>
                  </div>
               </form>

           </div>
       </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <!-- Column -->
              <div class="col-md-6 col-lg-3 col-xlg-6">
                <h4 class="card-title">MUHAMMAD FARHAN</h4>
                <h6 class="card-subtitle">NEXUS DIGITIZING</h6>
              </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-3 col-xlg-4">
                  <div class="card">
                      <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">0</h1>
                          <h6 class="text-white">Selected Orders</h6>
                      </div>
                  </div>
              </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-3 col-xlg-4">
                  <div class="card">
                      <div class="box bg-info text-center">
                          <h1 class="font-light text-white">100</h1>
                          <h6 class="text-white">Total Orders</h6>
                      </div>
                  </div>
              </div>
              <!-- Column -->
              <div class="col-md-6 col-lg-3 col-xlg-3">
                  <div class="card">
                      <div class="box bg-primary text-center">
                          <h1 class="font-light text-white">$300</h1>
                          <h6 class="text-white">Total Pay Amount</h6>
                      </div>
                  </div>
              </div>
            </div>

              <div class="table-responsive m-t-20 no-wrap">
                <form class="form" action="" method="post">
                <table class="table vm no-th-brd pro-of-month table-hover">
                    <thead>
                        <tr>
                          <th>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
                          </th>
                          <th>S.No</th>
                          <th>Order Name</th>
                          <th>Order Amonut</th>
                          <th>Order Date</th>
                          <th>Submission Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"></label>
                            </div>
                          </td>
                          <td>01</td>
                          <td>Fast USA</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td>Mar 17, 2021 | 06:50 PM</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3"></label>
                            </div>
                          </td>
                          <td>02</td>
                          <td>Fast USA</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td>Mar 17, 2021 | 06:50 PM</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4"></label>
                            </div>
                          </td>
                          <td>03</td>
                          <td>Fast USA</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td>Mar 17, 2021 | 06:50 PM</td>
                        </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="6" class="text-right">
                          <!-- <button type="button" class="btn btn-success"> <i class="fa fa-eye"></i> View Invoice</button> -->
                          <button type="button" class="btn btn-primary"> <i class="fa fa-file"></i> Generate Invoice</button>
                        </td>
                      </tr>
                    </tfoot>
                </table>
              </form>
              </div>
          </div>
        </div>


                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adidas Yeezy Boost 350 V2<br> Limited Edition</h4> <button type="button" class="close" data-dismiss="modal">×</button>
                </div> <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <h6>Item Details</h6>
                        <div class="row">
                            <div class="col"> <img class="img-fluid" src="https://i.imgur.com/iItpzRh.jpg"> </div>
                            <div class="col-xs-6" style="padding-top: 2vh;">
                                <ul type="none">
                                    <li>Size: 11</li>
                                    <li>Color: Desert Sage</li>
                                </ul>
                            </div>
                        </div>
                        <h6>Order Details</h6>
                        <div class="row">
                            <div class="col-xs-6">
                                <ul type="none">
                                    <li class="left">Order number:</li>
                                    <li class="left">Date:</li>
                                    <li class="left">Price:</li>
                                    <li class="left">Shipping:</li>
                                    <li class="left">Total Price:</li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul class="right" type="none">
                                    <li class="right">#BBRT-3456981</li>
                                    <li class="right">19-03-2020</li>
                                    <li class="right">$690</li>
                                    <li class="right">$30</li>
                                    <li class="right">$720</li>
                                </ul>
                            </div>
                        </div>
                        <h6>Shipment</h6>
                        <div class="row" style="border-bottom: none">
                            <div class="col-xs-6">
                                <ul type="none">
                                    <li class="left">Estimated arrival</li>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul type="none">
                                    <li class="right">25-03-2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- Modal footer -->
                <div class="modal-footer"> <button type="button" class="btn">Track order</button> </div>
            </div>
  </div>
</div>
