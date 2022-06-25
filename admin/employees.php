<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Employees</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                  <li class="breadcrumb-item active">Employees</li>
              </ol>
          </div>
       </div>
<!-- Breadcrumb End -->

<div class="row m-t-40">
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-4">
        <div class="card">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">100</h1>
                <h6 class="text-white">Total Employees</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Digitizers</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Vector Artisit</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-3 col-lg-3 col-xlg-4">
        <div class="card">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Sales Executive</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">


  <div class="row justify-content-between">
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <h4 class="card-title">Employees</h4>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Category</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-75" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="Pending">All</option>
                                <option value="Completed">Vector Artist</option>
                                <option value="Delivered">Digitizer</option>
                                <option value="Pending">Sales Executive</option>
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
                                <option value="Pending">Active</option>
                                <option value="In-Process">Not Active</option>
                              </select>
                            </div>
                          </div>
                       </div>
        </div>

      <div class="table-responsive m-t-20 no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Category</th>
                    <th>Status</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>mohdfarhan018</td>
                    <td>Muhammad Farhan</td>
                    <td>muhmammadfarhan014@gmail.com</td>
                    <td>+92 310 201112311</td>
                    <td><span class="label label-success ">Digitizer</span></td>
                    <td><span class="label label-info ">Active</span></td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>arbab69</td>
                    <td>Muhammad Arbab</td>
                    <td>muhmammadarbab69@gmail.com</td>
                    <td>+92 310 2011123221</td>
                    <td><span class="label label-primary ">Vector Artist</span></td>
                    <td><span class="label label-danger ">Not Active</span></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>muhddanial578</td>
                    <td>Muhammad Danial</td>
                    <td>muhmammaddanial864@gmail.com</td>
                    <td>+92 310 2011123221</td>
                    <td><span class="label label-info ">Sales Executive</span></td>
                    <td><span class="label label-success ">Active</span></td>
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
