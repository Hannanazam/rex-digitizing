<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">

    <!-- Breadcrumb Start -->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h3 class="text-themecolor">Orders Export</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Export Orders</a></li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="card">
        <div class="card-body">

        <div class="row justify-content-between">
                       <div class="col-lg-2 col-md-4 col-sm-12">
                        <h4 class="card-title">All Orders</h4>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-4 m-auto">Status</label>
                            <div class="col-md-8">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Order</option>
                                <option value="Pending">Pending</option>
                                <option value="In-Process">In-Process</option>
                                <option value="Completed">Completed</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Rejected">Rejected</option>
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="col-lg-3 col-md-4 col-sm-12">
                          <div class="form-group row">
                            <label class="control-label text-right col-md-5 m-auto">Category</label>
                            <div class="col-md-7">
                              <select class="form-control shadow-none custom-select font-sm-13 w-100" data-placeholder="Choose a Sort Filter" tabindex="1">
                                <option value="All Order">All Order</option>
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


            <div class="table-responsive m-t-20 no-wrap">
                <table class="table table-hover text-center" id="example23">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Order No</th>
                            <th>Customer Name</th>
                            <th>Order Name</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>ORD-001</td>
                            <td>Qadir Salman 02</td>
                            <td>new order edited</td>
                            <td><span class="label label-success">Digitizing</span></td>
                            </td>
                            <td>Jul 15, 2021</td>
                            <td>$10.00</td>
                            <td><span class="label label-success">In Process</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
</div>

@endsection

<script>
    $(function() {
        $('#example23').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
<?php include 'footer.php'; ?>
