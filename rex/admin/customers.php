<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Customers</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Customers</li>
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
                <h6 class="text-white">Total Customers</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Company</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Individual</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">
  <div class="row justify-content-between">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                        <h4 class="card-title">Customers</h4>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-5 m-auto">Account Type</label>
                            <div class="col-md-7">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All</option>
                                <option value="company">Company</option>
                                <option value="individual">Individual</option>
                              </select>
                            </div>
                          </div>
                       </div>
                   </div>
      <div class="table-responsive no-wrap">
          <table class="table vm no-th-brd pro-of-month table-hover" id="myTable">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Account Type</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>Muhammad Farhan</td>
                    <td>muhmammadfarhan014@gmail.com</td>
                    <td>Pakistan</td>
                    <td><span class="label label-success">Company</span></td>
                    <td><a href="#" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#customerDetail" title="View Details"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Muhammad Farhan</td>
                    <td>muhmammadfarhan014@gmail.com</td>
                    <td>Pakistan</td>
                    <td><span class="label label-primary">Individual</span></td>
                    <td>
                      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#customerDetail" data-original-title="View Details"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

                <!-- Modal -->
                <div class="modal fade" id="customerDetail" tabindex="-1" role="dialog"aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Customer Details</h4> <button type="button" class="close" data-dismiss="modal">×</button>
                            </div> <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                <div class="p-2 mb-2 bg-info"> <span class="h6 text-white">Customer's Details</span> </div>
                                    <div class="row" style="border-bottom: none">
                                        <div class="col-md-4">
                                            <ul type="none" class="font-weight-normal text-dark">
                                                <li>Name:</li>
                                                <li>Username:</li>
                                                <li>Email</li>
                                                <li>Phone</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <ul type="none"  class="font-weight-normal">
                                                <li>{{$customers->fullname}}</li>
                                                <li>{{$customers->username}}</li>
                                                <li>{{$customers->email}}</li>
                                                <li>{{$customers->phone}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 mb-2 bg-info"> <span class="h6 text-white">Company Details</span></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul type="none" class="font-weight-normal text-dark">
                                                <li>Company Name:</li>
                                                <li>Website:</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <ul type="none" class="font-weight-normal">
                                                <li>{{$customers->company_name}}</li>
                                                <li>{{$customers->website}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-2 mb-2 bg-info"> <span class="h6 text-white">Address</span></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul type="none" class="font-weight-normal text-dark">
                                                <li>Country:</li>
                                                <li>City:</li>
                                                <li>State:</li>
                                                <li>Zipcode:</li>
                                                <li>Location:</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <ul type="none" class="font-weight-normal">
                                                <li>{{$customers->country}}</li>
                                                <li>{{$customers->city}}</li>
                                                <li>{{$customers->state}}</li>
                                                <li>{{$customers->zipcode}}</li>
                                                <li>{{$customers->address}}</li>
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

<?php include 'footer.php'; ?>
