<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Users</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right d-none d-md-block">
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus-circle"></i> Add New</button>
  </div>
 </div>
<!-- Breadcrumb End -->

<div class="row m-t-40">
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">100</h1>
                <h6 class="text-white">Total Users</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white">80</h1>
                <h6 class="text-white">Active</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Not Active</h6>
            </div>
        </div>
    </div>
</div>

<div class="card">
  <div class="card-body">
      <div class="row justify-content-between">
                       <div class="col-lg-4 col-md-4 col-sm-12">
                        <h4 class="card-title">Users</h4>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">User Type</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-75" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="Pending">All</option>
                                <option value="Pending">Admin</option>
                                <option value="In-Process">Customer</option>
                                <option value="Completed">Vector Artist</option>
                                <option value="Delivered">Digitizer</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                       <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">User Status</label>
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
          <table class="table vm no-th-brd pro-of-month table-hover" id="myTable">
              <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Usertype</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>01</td>
                    <td>mohdfarhan018</td>
                    <td>Muhammad Farhan</td>
                    <td>farhan014@gmail.com</td>
                    <td>+92 310 201112311</td>
                    <td><span class="label label-danger">Admin</span></td>
                    <td><span class="label label-success">Active</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm" data-original-title="Edit User" data-toggle="modal" data-target="#addUser"><i class="fa fa-edit" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#block" data-original-title="Block User"><i class="fa fa-ban" aria-hidden="true"></i></button>
                      <button type="button" class="btn-delete-sweet btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>

                  </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                         <form method="post" class="row" action="{{route('users_add')}}">
                           <div class="form-group col-md-6">
                               <label>Full Name</label>
                               <input type="text" class="form-control" required name="fullname">
                           </div>

                           <div class="form-group col-md-6">
                               <label>Username</label>
                               <input type="text" class="form-control" required name="username">
                           </div>
                           <div class="form-group col-md-6">
                               <label>Email</label>
                               <input type="email" class="form-control" required name="email">
                           </div>

                           <div class="form-group col-md-6">
                               <label>Password</label>
                               <input type="password" class="form-control" required name="password">
                           </div>
                           <div class="form-group col-md-6">
                               <label>Contact</label>
                               <input type="tel" class="form-control" required name="phone">
                           </div>

                           <div class="form-group col-md-6">
                               <label>Country</label>
                               <select class="form-control" name="country">
                                <option value="" disabled selected>Choose Country</option>
                                <?php foreach($countrieslist as $country) { ?>
                                  <option value="{{$country}}">{{$country}}</option>
                                  <?php } ?>
                            </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label>State</label>
                               <select class="form-control" name="state">
                                <option value="" disabled selected>Choose State</option>
                                <?php foreach($countrieslist as $country) { ?>
                                  <option value="{{$country}}">{{$country}}</option>
                                  <?php } ?>
                            </select>
                           </div>
                           <div class="form-group col-md-6">
                               <label>City</label>
                               <select class="form-control" name="city">
                                <option value="" disabled selected>Choose City</option>
                                <?php foreach($countrieslist as $country) { ?>
                                  <option value="{{$country}}">{{$country}}</option>
                                  <?php } ?>
                            </select>
                           </div>
                           <div class="form-group col-md-12">
                               <label>Usertype</label>
                               <select class="form-control" name="usertype">
                                   <option value="" disabled selected>Select Usertype</option>
                                   @php $usertypelist = App\Models\Usertype::get(); @endphp
                                   @foreach ($usertypelist as $usertype)
                                       <option value="{{$usertype->id}}">{{$usertype->name}}</option>
                                   @endforeach
                               </select>
                           </div>

                           <div class="form-group col-md-12 text-right">
                               <button type="submit" class="btn btn-primary"> Add User </button>
                           </div>
                        </form>

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
</div>
<?php include 'footer.php'; ?>
