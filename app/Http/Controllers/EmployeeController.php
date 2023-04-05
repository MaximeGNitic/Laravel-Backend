<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployees(){
        return Employee::all();
    }

    public function getEmployee($id){
        $employee = Employee::find($id);
        if(!is_null($employee)){
            return Employee::where('id', $id)->get();
        }
    }

    public function addEmployee(Request $request){
        Employee::create($request->all());
    }

    public function updateEmployee(Request $request, $id){
        $employee = Employee::find($id);
        if(!is_null($employee)){
            $employee->update($request->all());
        }
    }

    public function deleteEmployee($id){
        $employee = Employee::find($id);
        if(!is_null($employee)){
            $employee->delete();
        }
    }
}
