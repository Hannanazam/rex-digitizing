<?php include 'header3.php'; ?>

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

<div class="card">
  <div class="card-body">
      <div class="d-flex">
          <h5 class="card-title">ORDERS</h5>
      </div>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table table-hover text-center" id="myTable">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Order No</th>
                    <th>Order Name</th>
                    <th>Date</th>
                    <th>Pay Amount</th>
                    <th>Status</th>
                    <th>Attachments</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>ORD-001</td>
                    <td>Rocket Fire</td>
                    <td>Mar 16, 2021</td>
                    <td>$10.00</td>
                    <td><span class="label label-success label-rounded">In Process</span></td>
                    <td>
                      <a href="" class="btn btn-primary btn-xs">Received</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-dark btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="customerinvoice.php" class="border-left btn btn-warning btn-xs"><i class="fa fa-upload" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>ORD-002</td>
                    <td>Rocket Fire</td>
                    <td>Mar 16, 2021</td>
                    <td>$10.00</td>
                    <td><span class="label label-info label-rounded">On Approve</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded</a>
                      <a href="" class="btn btn-primary btn-xs">Received</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-dark btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a href="customerinvoice.php" class="border-left btn btn-warning btn-xs"><i class="fa fa-upload" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>ORD-003</td>
                    <td>Rocket Fire</td>
                    <td>Mar 16, 2021</td>
                    <td>$10.00</td>
                    <td><span class="label label-warning label-rounded">Completed</span></td>
                    <td>
                      <a href="" class="btn btn-danger btn-xs">Uploaded</a>
                      <a href="" class="btn btn-primary btn-xs">Received</a>
                    </td>
                    <td>
                      <a href="customerinvoice.php" class="btn btn-dark btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
