<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-12 align-self-center">
              <h3 class="text-themecolor">Quotes</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Quotes</a></li>
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
                <h6 class="text-white">Total Quotes</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Digitizing Quotes</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Vector Quotes</h6>
            </div>
        </div>
    </div>
</div>

        <div class="card">
          <div class="card-body">
              <div class="d-flex">
                  <h5 class="card-title">QUOTES</h5>
              </div>

              <div class="table-responsive m-t-20 no-wrap">
                  <table class="table table-hover text-center" id="myTable">
                      <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Quote No</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Attachments</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>01</td>
                            <td>QUT-001</td>
                            <td><span class="label label-success">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><span class="label label-primary">Not Defined</span></td>
                            <td><a href="#" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#customerattachments" title="View Details">View Files</a></td>
                            <td><span class="label label-success">Pending</span></td>
                            <td>
                              <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>02</td>
                            <td>QUT-001</td>
                            <td><span class="label label-success">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td>$10.00</td>
                            <td><a href="#" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#customerattachments" title="View Details">View Files</a></td>
                            <td><span class="label label-success">Responded</span></td>
                            <td>
                              <a href="javascript:void(0)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#convert" data-original-title="Convert to Order"><i class="fa fa-arrow-right"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <td>03</td>
                            <td>QUT-001</td>
                            <td><span class="label label-success">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><span class="label label-primary">Not Defined</span></td>
                            <td><a href="#" class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#customerattachments" title="View Details">View Files</a></td>
                            <td><span class="label label-success">Pending</span></td>
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

<?php include 'footer.php'; ?>
