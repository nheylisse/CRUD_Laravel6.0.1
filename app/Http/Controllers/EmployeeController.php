<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use DataTables;
use Redirect,Response;

class EmployeeController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
if ($request->ajax()) {
$data = Employee::latest()->get();
return Datatables::of($data)
->addIndexColumn()
->addColumn('action', function($row){

$action = '<a class="btn btn-info text-white" id="edit-employee" data-toggle="modal" data-id='.$row->id.'> <span class="iconify" data-icon="clarity:edit-solid" data-inline="false"></span> </a>
<meta name="csrf-token" content="{{ csrf_token() }}">
<a id="delete-employee" data-id='.$row->id.' class="btn btn-danger text-white id="delete-employee"> <span class="iconify" data-icon="wpf:delete" data-inline="false"></span> </a>';

return $action;

})
->rawColumns(['action'])
->make(true);
}

return view('employees');
}

public function store(Request $request)
{

$r=$request->validate([
'empName' => 'required',
'empPosition' => 'required',
'dateHired' => 'required',
'empStatus' => 'required',


]);

$uId = $request->employee_id;
Employee::updateOrCreate(['id' => $uId],['empName' => $request->empName, 'empPosition' => $request->empPosition,
'dateHired' => $request->dateHired, 'empStatus' => $request->empStatus]);
if(empty($request->employee_id))
$msg = 'Employee created successfully.';
else
$msg = 'Employee data is updated successfully';
return redirect()->route('employees.index')->with('success',$msg);
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function show($id)
{
$where = array('id' => $id);
$employee = Employee::where($where)->first();
return Response::json($employee);
//return view('users.show',compact('user'));
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function edit($id)
{
$where = array('id' => $id);
$employee = Employee::where($where)->first();
return Response::json($employee);
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/

public function destroy($id)
{
$employee = Employee::where('id',$id)->delete();
return Response::json($employee);

}
}