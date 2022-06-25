<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Vector Orders</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="vectororders.php">Vector Orders</a></li>
                  <li class="breadcrumb-item active">Create Order</li>
              </ol>
          </div>
       </div>

       <div class="card">
         <div class="card-body">
           <h4 class="card-title">SELECT CUSTOMER</h4>
           <h6 class="card-subtitle">Select the customer for you want to place the order</h6>
           <form method="post" class="row" action="">

                <div class="form-group col-md-6">
                    <label>Select Customer</label>
                    <select class="select2 form-control">
                      <option value="" disabled="" selected="">Select Customer</option>
                      <option>Muhammad Farhan</option>
                      <option>Muhammad Danial</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Company</label>
                    <input type="text" name="contact" class="form-control" value="Nexus Digitizing" disabled="">
                </div>

                <div class="form-group col-md-6">
                    <label>Country</label>
                    <input type="text" name="contact" class="form-control" value="Australia" disabled="">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" name="contact" class="form-control" value="mohdfarhan018@gmail.com" disabled="">
                </div>

              </form>
         </div>
       </div>

       <div class="card">
         <div class="card-body">
           <h4 class="card-title">SELECT DESIGNER</h4>
           <h6 class="card-subtitle">Select the designer you want to assign the order</h6>
           <form method="post" class="row" action="">

                <div class="form-group col-md-6">
                    <label>Select Desginer</label>
                    <select class="select2 form-control">
                      <option value="" disabled="" selected="">Select Customer</option>
                      <option>Muhammad Farhan</option>
                      <option>Muhammad Danial</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text" name="contact" class="form-control" value="mohdfarhan018@gmail.com" disabled="">
                </div>

              </form>
         </div>
       </div>

       <div class="card">
         <div class="card-body">
           <h4 class="card-title">VECTOR ORDER</h4>
           <h6 class="card-subtitle">Create Your New Vector Order</h6>
              <form method="post" class="form row m-t-40" action="" enctype="multipart/form-data">
                <div class="form-group col-md-6">
                    <label>Order Name</label>
                    <input type="text" class="form-control" required="" name="name">
                </div>

                <div class="form-group col-md-6">
                    <label>Required Format</label>
                    <select class="select2 form-control" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                      <option value="" disabled selected>Select Required Format</option>
                      <option value="20">AI</option>
                    	<option value="21">CDR</option>
                    	<option value="22">EPS</option>
                    	<option value="23">FH</option>
                    	<option value="25">PSD</option>
                    	<option value="27">Other</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Vector For</label>
                    <select class="select2 form-control">
                      <option value="" disabled selected>Select Placements</option>
                      <option value="20">Block Printing</option>
                    	<option value="21">Digital Printing</option>
                    	<option value="17">DTG (Direct To Garment)</option>
                    	<option value="19">Heat Transfer</option>
                    	<option value="22">Offset Printing</option>
                    	<option value="16">Screen Printing</option>
                    	<option value="18">Vinyl</option>
                    	<option value="24">Other</option>n>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Required Color</label>
                    <select class="select2 form-control">
                      <option value="" disabled selected>Select Required Color</option>
                      <option value="4">1 Solid Color</option>
                      <option value="3">CMYK</option>
                      <option value="5">One Color With Half Tone</option>
                      <option value="6">Other</option>
                      <option value="1">PMS</option>
                      <option value="2">RGB</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label>Total No of Colors</label>
                    <input type="number" class="form-control" name="colors">
                </div>

                <div class="form-group col-md-12">
                    <label>Additional Information</label>
                    <textarea class="form-control" rows="5" spellcheck="false" placeholder="Any special instruction you want to add...."></textarea>
                </div>

                <div class="form-group col-md-12">
                  <label>Attachments</label>
                      <div action="#" class="dropzone dropzone-area dz-clickable " id="dpz-remove-all-thumb">
                          <div class="fallback dictRemoveFile">
                              <input name="file" type="file" multiple />
                          </div>
                      </div>
                    </div>
                </div>

                <div class="form-group col-md-12">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Let us know if this order is super RUSH!</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-12 text-right">
                    <button type="submit" class="btn btn-primary">Place Order </button>
                </div>
             </form>
       </div>

    </div>
</div>



<?php include 'footer.php'; ?>
