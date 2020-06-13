<!DOCTYPE html>
<html>
<head>
<title>Employee Record</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
error=false

function validate()
{
if(document.employeeForm.empname.value !='' && document.employeeForm.empPosition.value !=' ' && document.employeeForm.dateHired.value !='' && document.employeeForm.empStatus.value !='' )
document.employeeForm.btnsave.disabled=false
else
document.employeeForm.btnsave.disabled=true
}
</script>

<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

</head>
<body>

<ul>
  <li><a class="active" href="#">
  <img src="/pph.ico" width="30" height="40" class="d-inline-block align-top" alt=""> 
  TEAM IT PORTAL</a></li>
  <p>
  <a class="nav-link" href="/">Log Out</a>
  </p>
  
</ul>

<br><br>
<div class="container">
<h2 align="left">Employee Record</h2>
<hr>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right text-white">
<a class="btn btn-primary mb-2" id="new-employee" data-toggle="modal">New Employee</a>
</div>
</div>
</div>

<table class="table table-bordered data-table" >
<thead>

<tr id="">
<th width="15%">Action</th>
<!--<th width="5%">No</th>
<th width="5%">Id</th>-->
<th width="30%">Name</th>
<th width="30%">Position</th>
<th width="30%">Date Hired</th>
<th width="30%">Status</th>

</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

<!-- Add and Edit customer modal -->
<div class="modal fade" id="crud-modal" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-primary">
<h4 class="modal-title text-white" id="employeeCrudModal"></h4>
</div>
<div class="modal-body">
<form name="employeeForm" action="{{ route('employees.store') }}" method="POST">

@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="empName" " class="form-control" placeholder="Name" onchange="validate()" >
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Position:</strong>
<input type="text" name="empPosition"  class="form-control" placeholder="Enter Position" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date Hired:</strong>
<input type="date" name="dateHired"  class="form-control" placeholder="" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Status:</strong>
<input type="text" name="empStatus"  class="form-control" placeholder="Enter Status" onchange="validate()">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<a href="{{ route('employees.index') }}" class="btn btn-light">Cancel</a>
<button type="submit" id="btn-save" name="btnsave" class="btn btn-primary text-white">Save</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



<!-- Edit customer modal -->
<div class="modal fade" id="crudEdit-modal" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-info">
<h4 class="modal-title text-white" id="employeeEditCrudModal"></h4>
</div>
<div class="modal-body">
<form name="employeeForm" action="{{ route('employees.store') }}" method="POST">
<input type="hidden" name="employee_id" id="employee_id" >
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="empName" id="empName" class="form-control" placeholder="Name" onchange="validate()" >
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Position:</strong>
<input type="text" name="empPosition" id="empPosition" class="form-control" placeholder="Enter Position" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date Hired:</strong>
<input type="date" name="dateHired" id="dateHired" class="form-control" placeholder="" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Status:</strong>
<input type="text" name="empStatus" id="empStatus" class="form-control" placeholder="Enter Status" onchange="validate()">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<a href="{{ route('employees.index') }}" class="btn btn-light">Cancel</a>
<button type="submit" id="btn-save" name="btnsave" class="btn btn-info text-white">Update</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>



<!-- Show emp modal -->
<div class="modal fade" id="crud-modal-show" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="employeeCrudModal-show"></h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2"></div>
<div class="col-xs-10 col-sm-10 col-md-10 ">

<table class="table-responsive ">
<tr height="50px"><td><strong>Name:</strong></td><td id="sempName"></td></tr>
<tr height="50px"><td><strong>Position:</strong></td><td id="sempPosition"></td></tr>

<tr><td></td><td style="text-align: right "><a href="{{ route('employees.index') }}" class="btn btn-danger">OK</a> </td></tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>



</body>

<script type="text/javascript">

$(document).ready(function () {

var table = $('.data-table').DataTable({
processing: true,
serverSide: true,
ajax: "{{ route('employees.index') }}",
columns: [
{data: 'action', name: 'action', orderable: false, searchable: false},
//{data: 'DT_RowIndex', name: 'DT_RowIndex'},
//{data: 'id', name: 'id'},
{data: 'empName', name: 'empName'},
{data: 'empPosition', name: 'empPosition'},
{data: 'dateHired', name: 'dateHired'},
{data: 'empStatus', name: 'empStatus'},

]
});

/* When click New customer button */
$('#new-employee').click(function () {
$('#btn-save').val("create-employee");
$('#employee').trigger("reset");
$('#employeeCrudModal').html("Add New Employee");
$('#crud-modal').modal('show');
});

/* Edit customer */
$('body').on('click', '#edit-employee', function () {
var employee_id = $(this).data('id');
$.get('employees/'+employee_id+'/edit', function (data) {
$('#employeeEditCrudModal').html("Edit Employee");
$('#btn-update').val("Update");
$('#btn-save').prop('disabled',false);
$('#crudEdit-modal').modal('show');
$('#employee_id').val(data.id);
$('#empName').val(data.empName);
$('#empPosition').val(data.empPosition);
$('#dateHired').val(data.dateHired);
$('#empStatus').val(data.empStatus);


})
});
/* Show customer */
$('body').on('click', '#show-empployee', function () {
var employee_id = $(this).data('id');
$.get('employees/'+employee_id, function (data) {

$('#sempNname').html(data.empName);
$('#sempPosition').html(data.empPosition);

})
$('#employeeCrudModal-show').html("Employee Details");
$('#crud-modal-show').modal('show');
});

/* Delete customer */
$('body').on('click', '#delete-employee', function () {
var employee_id = $(this).data("id");
var token = $("meta[name='csrf-token']").attr("content");
confirm("Are You sure want to delete ?");

$.ajax({
type: "DELETE",
url: "http://localhost/LARAVEL_LOGIN_DASHBOARD/public/employees/"+employee_id,
data: {
"id": employee_id,
"_token": token,
},
success: function (data) {

table.ajax.reload();
},
error: function (data) {
console.log('Error:', data);
}
});
});

});

</script>
</html>