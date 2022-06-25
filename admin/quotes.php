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
                <h6 class="text-white">Pending</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-4 col-lg-4 col-xlg-4">
        <div class="card">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white">20</h1>
                <h6 class="text-white">Responded</h6>
            </div>
        </div>
    </div>
</div>

        <div class="card">
          <div class="card-body">
          <div class="row justify-content-between">
                       <div class="col-lg-2 col-md-4 col-sm-12">
                        <h4 class="card-title">Quotes</h4>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Sort By</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Quotes</option>
                                <option value="Pending">Pending</option>
                                <option value="In-Process">Responded</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-5 m-auto">Category</label>
                            <div class="col-md-7">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Quotes</option>
                                <option value="Pending">Digitizing</option>
                                <option value="In-Process">Vector</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group d-flex mb-0">
                                <label for="" class="w-50 m-auto">Select Date</label>
                                 <input type="text" name="date" value="" class="form-control ml-2" id="daterange" required>
                                <br>
                        </div>
                       </div>
                   </div>

              <div class="table-responsive no-wrap">
                  <table class="table table-hover text-center" id="myTable">
                      <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Quote No</th>
                            <th>Customer Name</th> 
                            <th>Category</th>
                            <th>Date</th>
                            <th>Rush</th>
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
                            <td>Muhammad Farhan</td>
                            <td><span class="label label-success">Digitizing</span></td>
                            <td>Mar 16, 2021</td>
                            <td><i class="fa fa-times" style="color:red"></i></td>
                            <td><a href="" class="btn btn-dark btn-xs" data-toggle="modal" data-target="#setQuotePrice">Add Quote</a></td>
                            <td>                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#customerattachments">Customer</button>
</td>
<td><span class="label label-success">Pending</span></td>

                            <td>
                              <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#orderDetail2" data-original-title="View Quotes"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#delete" data-original-title="Delete Quote"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#convert" data-original-title="Convert to Order"><i class="fa fa-arrow-right"></i></button>
                            </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
        </div>

        <div class="modal fade" id="setQuotePrice" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Quote Price</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('quotes_price_add')}}">
                
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="hidden" class="form-control" value="{{$quote->id}}" name="id">
                                    <label>Set Quote Price</label>
                                    <input type="text" class="form-control" required name="customer_amount">
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                        </form>   
                    </div>
                </div>
                </div>
        </div>
        
    </div>
</div>

<?php include 'footer.php'; ?>
