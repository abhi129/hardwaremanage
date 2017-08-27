<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Employee;

class EmployeeController extends Controller
{
    public function InsertEmplyee(){
    	$employee = new Employee();

        $employee->emp_name=Input::get('emp_name');
        $employee->emp_dept=Input::get('emp_dept');
        $employee->emp_assign=Input::get('emp_assign');
         $employee->emp_dur=Input::get('emp_dur');
         $employee->save();

         return view('employee');
     }



    }

