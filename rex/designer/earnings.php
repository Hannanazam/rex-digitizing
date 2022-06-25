<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">My Earnings</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">My Earnings</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="row">
              <!-- Column -->
              <div class="col-md-4 col-lg-4 col-xlg-4">
                  <div class="card">
                      <div class="box bg-primary text-center">
                          <h1 class="font-light text-white">$300</h1>
                          <h6 class="text-white">Total Pay Amount</h6>
                      </div>
                  </div>
              </div>

                            <!-- Column -->
                <div class="col-md-4 col-lg-4 col-xlg-4">
                  <div class="card">
                      <div class="box bg-danger text-center">
                          <h1 class="font-light text-white">$200</h1>
                          <h6 class="text-white">Paid Amount</h6>
                      </div>
                  </div>
              </div>

                            <!-- Column -->
                <div class="col-md-4 col-lg-4 col-xlg-4">
                  <div class="card">
                      <div class="box bg-warning text-center">
                          <h1 class="font-light text-white">$100</h1>
                          <h6 class="text-white">Unapid Amount</h6>
                      </div>
                  </div>
              </div>

            </div>

        <div class="card">
          <div class="card-body">
          <div class="d-flex">
                            <h5 class="card-title">Earning Per Order</h5>
                        </div>

              <div class="table-responsive m-t-20 no-wrap">
                <form class="form" action="" method="post">
                <table class="table table-hover text-center" id="myTable">
                    <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Order No</th>
                          <th>Order Amonut</th>
                          <th>Order Date</th>
                          <th>Is Paid</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>01</td>
                          <td>ORD-001</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td><i class="fa fa-times" style="color:red"></i></td>
                        </tr>
                        <tr>
                          <td>02</td>
                          <td>ORD-001</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td><i class="fa fa-check" style="color:blue"></i></td>
                        </tr>
                        <tr>
                          <td>03</td>
                          <td>ORD-001</td>
                          <td>$45.00</td>
                          <td>Mar 16, 2021 | 01:30 AM</td>
                          <td><i class="fa fa-check" style="color:blue"></i></td>
                        </tr>
                    </tbody>
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
