<?php include 'header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Digitizing Quotes</h3>
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="digitizingquotes.php">Digitizing Quotes</a></li>
                  <li class="breadcrumb-item active">Ask Quote</li>
              </ol>
          </div>
       </div>

           <div class="card">
             <div class="card-body">
               <h4 class="card-title">DIGITIZING QUOTE</h4>
               <h6 class="card-subtitle">Get the quote for Digitizing Design</h6>
                  <form method="post" class="form row m-t-40" action="" enctype="multipart/form-data">
                    <div class="form-group col-md-6">
                        <label>Quote Name</label>
                        <input type="text" class="form-control" required="" name="name">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Required Format</label>
                        <select class="select2 form-control" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                          <option value="" disabled selected>Select Required Format</option>
                          <option value="1">ART</option>
                          <option value="2">CND</option>
                          <option value="3">CSD</option>
                          <option value="4">DST</option>
                          <option value="5">EXP</option>
                          <option value="6">FMC</option>
                          <option value="7">HUS</option>
                          <option value="8">JEF</option>
                          <option value="9">OFM</option>
                          <option value="11">PCD</option>
                          <option value="12">PCS</option>
                          <option value="13">PEC</option>
                          <option value="14">PES</option>
                          <option value="15">PXF</option>
                          <option value="16">SEW</option>
                          <option value="17">SHV</option>
                          <option value="18">VIP</option>
                          <option value="19">VP3</option>
                          <option value="26">Other</option>
                        </select>
                    </div>



                    <div class="form-group col-md-6">
                        <label>Placement</label>
                        <select class="select2 form-control">
                          <option value="" disabled selected>Select Placements</option>
                          <option value="2">Apron</option>
                        	<option value="3">Bags</option>
                        	<option value="4">Beanies</option>
                        	<option value="5">Cap Back</option>
                        	<option value="6">Cap Front</option>
                        	<option value="7">Cap Side</option>
                        	<option value="8">Full Chest</option>
                        	<option value="9">Jacket Back</option>
                        	<option value="10">Left Chest</option>
                        	<option value="11">Mid Size</option>
                        	<option value="13">Sleeve</option>
                        	<option value="14">Towel</option>
                        	<option value="15">Visor</option>
                        	<option value="23">Other</option>
                        </select>
                    </div>


                    <div class="form-group col-md-6">
                        <label>Height</label>
                        <input type="text" class="form-control" required="" name="username">
                        <span class="help-block text-warning"><small>Enter height in inches.</small></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Width</label>
                        <input type="text" class="form-control" required="" name="width">
                        <span class="help-block text-warning"><small>Enter width in inches.</small></span>
                    </div>


                          <div class="form-group col-md-6">
                              <label>Fabric</label>
                              <select class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" tabindex="-1" aria-hidden="true">
                                <optgroup label="Pacific Time Zone">
                                <option disabled selected>Select Fabric</option>
                                <option value="2">Apron</option>
                              	<option value="3">Bags</option>
                              	<option value="4">Beanies</option>
                              	<option value="5">Cap Back</option>
                              	<option value="6">Cap Front</option>
                              	<option value="7">Cap Side</option>
                              	<option value="8">Full Chest</option>
                              	<option value="9">Jacket Back</option>
                              	<option value="10">Left Chest</option>
                              	<option value="11">Mid Size</option>
                              	<option value="13">Sleeve</option>
                              	<option value="14">Towel</option>
                              	<option value="15">Visor</option>
                              	<option value="23">Other</option>
                              </optgroup>
                              </select>
                          </div>

                    <div class="form-group col-md-6">
                        <label>Total No of Colors</label>
                        <input type="number" class="form-control" name="colors">
                    </div>

                    <div class="form-group col-md-6">
                      <div class="row">
                        <label class="control-label col-md-4">Background Fill</label>
                        <div class="col-md-8">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" name="member" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3">Yes</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio4" name="member" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4">No</label>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Additional Information</label>
                        <textarea class="form-control" rows="5" spellcheck="false" placeholder="Any special instruction you want to add...."></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                              <label class="custom-control-label" for="customCheck1">Let us know if this quote is super RUSH!</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-12">
                      <label>Attachments</label>

                          <div action="#" class="dropzone dropzone-area dz-clickable " id="dpz-remove-all-thumb">
                              <div class="fallback dictRemoveFile">
                                  <input name="file" type="file" multiple />
                              </div>
                          </div>
                        </div>



                    <!-- <div class="form-group col-md-12">
                      <label>Attachments</label>
                      <div class="row">
                        <div class="col-md-11">
                          <div action="#" class="dropzone dropzone-area dz-clickable " id="dpz-remove-all-thumb">
                              <div class="fallback dictRemoveFile">
                                <div class="dz-message">Drop Files Here To Upload</div>
                                  <input name="file" type="file" multiple />
                              </div>
                          </div>
                        </div>
                        <div class="col-md-1">
                          <button id="clear-dropzone" class="btn btn-primary"><i class="fa fa-minus-circle"></i></button>
                        </div>
                      </div>
                    </div> -->

                    </div>

                    <div class="form-group col-md-12 text-left">
                        <button type="submit" class="btn btn-primary"> Submit Request </button>
                    </div>
                 </form>
             </div>
         </div>

    </div>
</div>



<?php include 'footer.php'; ?>
