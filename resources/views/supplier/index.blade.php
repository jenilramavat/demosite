@extends('layouts.app')

@section('content')
<div class="container">
     
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supplier Management</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                <h3 class="card-title">Supplier </h3>
                <button id="btnadd_supplier" type="button" data-toggle="modal" data-target="#AddSupplier" class="btn btn-dark btn-md float-right">Add Supplier</button>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

                <table id="supplier" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SupplierCode</th>
                    <th>Contact Person</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>RegNo</th>
                    <th>VatNo</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  </tbody>

                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tfoot>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- Add Model -->
      <div class="modal fade" id="AddSupplier">
        <div class="modal-dialog modal-lg">
          <form id="add-edit-Supplier" method="post">  
             <input type="hidden" name="ID">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Supplier</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">

              <div class="form-group">
                <label for="inputName">Supplier Code</label>
                <input type="text" id="SupplierCode" name="SupplierCode" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Contact Person</label>
                <input type="text" id="ContactPerson" name="ContactPerson" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Address</label>
                <textarea class="form-control" rows="3" name="Address" placeholder="Enter Address"></textarea>
              </div>

              <div class="form-group">
                <label for="inputName">Phone</label>
                           <input class="form-control"  type="number" id="Phone" name="Phone">

              </div>
                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input class="form-control"  type="email" id="Email" name="Email">

                </div>
                <div class="form-group">
                    <label for="inputName">Reg No</label>
                    <input class="form-control"  type="text" id="RegNo" name="RegNo">

                </div>

                <div class="form-group">
                    <label for="inputName">Vat No</label>
                    <input class="form-control"  type="text" id="VatNo" name="VatNo">

                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
         
          <!-- /.modal-content -->
        </form>
        </div>
        <!-- /.modal-dialog -->
      </div>



    </section>
    <!-- /.content -->
  </div>


</div>

<script>
  $(function () {
      var data_table;
    var URL = '';
    var list_fields  = ['SupplierCode','ContactPerson','Address','Phone','Email','RegNo','VatNo','ID'];

    //alert($("input[type='search']").val());
      function Supplier_datatable(){

          data_table =  $('#supplier').DataTable({
              "bDestroy": true,
              "bProcessing": true,
              "bServerSide": true,

              ajax:{
                  url: baseurl + "/admin/supplier/ajax_datagrid",
              },

              order: [ [5, 'desc'] ],
              // "iDisplayLength": "10",
              // "aaSorting": [[2, 'asc']],
              "aoColumns": [
                  {"bSortable": true}, // 1. SupplierCode
                  {  "bSortable": true },  // 2. ContactPerson
                  {  "bSortable": true },  // 3. Address
                  {  "bSortable": true },  // 4. Phone
                  {  "bSortable": true },  //5. Email
                  {  "bSortable": true },  //6. RegNo
                  {  "bSortable": true },  //7. VetNo
                  {                       //  8. Action
                      "bSortable": false,
                      mRender: function (id, type, full) {

                          var delete_ = "{{ URL::to('/admin/supplier/{id}/delete')}}";
                          delete_  = delete_ .replace( '{id}', full[7] );


                          action = '<div class = "hiddenRowData" >';
                          for(var i = 0 ; i< list_fields.length; i++){
                              action += '<input type = "hidden"  name = "' + list_fields[i] + '"       value = "' + (full[i] != null?full[i]:'')+ '" / >';
                          }

                          action += '</div>';

                          action += ' <a href="javascript:void(0);" data-name = "' + full[7] + '" data-id="' + full[7] + '" title="Edit" class="btn-sm edit-supplier btn-default" data-original-title="Edit" title="" data-placement="top" data-toggle="tooltip"><i class="fas fa-edit"></i>&nbsp;</a>';

                          action += ' <a href="'+delete_+'" data-redirect="{{ URL::to('supplier')}}" title="Delete"  class="btn-sm delete-expense btn-danger" data-original-title="Delete" title="" data-placement="top" data-toggle="tooltip"><i class="fas fa-trash"></i></a>';


                          return action;
                          //return '';
                      }
                  }
              ],


          });
      }

      Supplier_datatable();

    $('.modal').on('hidden.bs.modal', function(){
      $(this).find('form')[0].reset();
    });


    //Add button click
    $('#btnadd_supplier').click(function (ev) {
        ev.preventDefault();
        console.log("add btn");
        $("#add-edit-Supplier [name='ID']").val("");

    });


     $('#add-edit-Supplier').submit(function(e){
       e.preventDefault();
       var modal = $(this).parents('.modal');
       var formData=new FormData(($('#add-edit-Supplier')[0]));

       var ID = $("#add-edit-Supplier [name='ID']").val();

       if( typeof ID != 'undefined' && ID != ''){
                URL = baseurl + '/admin/supplier/'+ID+'/update';
            }else{
                URL = baseurl + '/admin/supplier/add';
            }


         $.ajax({
            url: URL, //Server script to process data
            type: 'POST',
            dataType: 'json',
            success: function(response){
              if(response.status == 'success'){
                   modal.modal('hide');
                   data_table.draw();
                   toastr.success(response.message, "Success");
              }else{

                toastr.error(response.message, "Error");
              }
            },
            error: function(error) {
              //toastr.error('Something went wrong.')
               // alert("Something went wrong");
            },
            // Form data
            data: formData,
            //Options to tell jQuery not to process data or worry about content-type.
            cache: false,
            contentType: false,
            processData: false
    });


     });


// Edit supplier
$('table tbody').on('click', '.edit-supplier', function (ev) {
      ev.preventDefault();
      ev.stopPropagation();
      $('#add-edit-Supplier').trigger("reset");
      var cur_obj = $(this).prev("div.hiddenRowData");
      for(var i = 0 ; i< list_fields.length; i++){

          $("#add-edit-Supplier [name='"+list_fields[i]+"']").val(cur_obj.find("input[name='"+list_fields[i]+"']").val());

      }


      $('#AddSupplier').modal('show');
}); 

//Delete Expense
$('body').on('click', '.delete-expense', function (e) {
  e.preventDefault();

  if(confirm('Are you sure you want to delete this supplier?')){
      $.ajax({
            url: $(this).attr("href"),
            type: 'POST',
            dataType: 'json',
          headers: {
              "X-CSRF-Token": $("#add-edit-Supplier [name='_token']").val(),

              },
            success: function (response) {
                $(".delete-expense").button('reset');
                if (response.status == 'success') {
                    data_table.draw();
                    toastr.success(response.message, "Success");
                } else {
                    toastr.error(response.message, "Error", toastr_opts);
                }
            },
            // Form data
            //data: {},
            cache: false,
            contentType: false,
            processData: false
        });
  }

  return false;

});




  });


</script>





@endsection
