<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

  <!-- Breadcrumb Start -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor">Assign Orders</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Assign Orders</a></li>
                </ol>
            </div>
         </div>
  <!-- Breadcrumb End -->
        <div class="card">
          <div class="card-body">
              <div class="d-flex">
                  <h5 class="card-title">ASSIGN ORDERS</h5>
              </div>

              <div class="table-responsive m-t-20 no-wrap">
                  <table class="table table-hover text-center" id="myTable">
                      <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Order No</th>
                            <th>Order Name</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Rush</th>
                            <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>01</td>
                            <td>ORD-001</td>
                            <td>Rocket Fire</td>
                            <td><span class="label label-success label-rounded">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><i class="fa fa-times" style="color:red"></i></td>
                            <td>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#assignMoal">Assign</button>
                              <button type="button" class="btn btn-dark btn-sm">Attachments</button>
                            </td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>ORD-002</td>
                            <td>Rocket Fire</td>
                            <td><span class="label label-success label-rounded">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><i class="fa fa-check" style="color:blue"></i></td>
                            <td>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Assign</button>
                              <button type="button" class="btn btn-dark btn-sm">Attachments</button>
                            </td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>ORD-003</td>
                            <td>Rocket Fire</td>
                            <td><span class="label label-success label-rounded">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><i class="fa fa-times" style="color:red"></i></td>
                            <td>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Assign</button>
                              <button type="button" class="btn btn-dark btn-sm">Attachments</button>
                            </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>

    </div>
</div>

<div class="modal fade" id="assignMoal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Select Designer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form method="post" class="form row" action="">
                    <div class="form-group col-md-6">
                        <label>Select Designer</label>
                        <select class="form-control">
                          <option value="" disabled="" selected="">Select Designer</option>
                          <option>Muhammad Farhan</option>
                          <option>Muhammad Danial</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" name="contact" class="form-control" value="mohdfarhan018@gmail.com" disabled="">
                    </div>

                    <div class="form-group col-md-12 text-right">
                        <button type="submit" class="btn btn-dark">Assign Order</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
