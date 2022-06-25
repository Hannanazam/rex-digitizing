<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Users</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                  <li class="breadcrumb-item active">Add Users</li>
              </ol>
          </div>
       </div>

       <div class="row">
         <div class="col-12">
           <div class="card">
             <div class="card-body">
               <h4 class="card-title">Add New User</h4>

                  <form method="post" class="form-material row" action="" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label>Full Name</label>
                        <input type="text" class="form-control" required="" name="name">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Username</label>
                        <input type="text" class="form-control" required="" name="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" required="" name="email">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control" required="" name="password">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Phone</label>
                        <input type="tel" class="form-control" required="" name="phone">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Country</label>
                        <select class="form-control" name="country">
                          <option value="" disabled selected>Choose Country</option>
                          <option>Pakistan</option>
                          <option>USA</option>
                          <option>Australia</option>
                          <option>UK</option>
                          <option>India</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Usertype</label>
                        <select class="form-control" name="usertype">
                            <option value="" disabled selected>Select Usertype</option>
                            <option>Admin</option>
                            <option>Digitizer</option>
                            <option>Vector Artist</option>
                            <option>Sales Executive</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12 text-left">
                        <button type="submit" class="btn btn-primary"> Add User </button>
                    </div>
                 </form>

             </div>
         </div>
       </div>
      </div>
    </div>
</div>

<?php include 'footer.php'; ?>
